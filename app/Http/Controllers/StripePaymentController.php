<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Invoice;
use App\Models\Projects;
use App\Models\Clients;
use App\Models\Incomes;
use Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\Notifications;

   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {


        try {
            $check=Invoice::get();
            $empty='';
            foreach($check as $key){
                if($key->id==Crypt::decrypt($id)){
                    $info=Invoice::find(Crypt::decrypt($id));
                    return view('checkout',compact('info'));
                }
            }
            abort(404);

        } catch (DecryptException $e) {
            abort(404);
        }


        
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */


    public function stripePost(Request $request)
    {

        $info=Invoice::find($request->invoice_id);

        if($info->status=="Sent"){
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe= Stripe\Charge::create ([
                        "amount" => 100 * $request->amount,
                        "currency" => $request->currency,
                        "source" => $request->stripeToken,
                        "description" => $info->description 
            ]);

            if($stripe){
               
                $project=Projects::find($info->project_id);
                $email=Clients::find($project->client_id);
                $client_email=$email->email;
                $client_name=$email->name;
                $currency='';
                if ($project->currency=='EUR'){
                    $currency= '€';
                }elseif($project->currency=='GBP'){
                    $currency= '£';
                }else{
                    $currency= '$';
                }

                // Sent Email For Admin
                $data = array('invoice_number'=>$info->invoice_number,'amount'=>$info->amount,'project_name'=>$project->project_name,'method'=>'Stripe','client_email'=>$client_email,'client_name'=>$client_name,'currency'=>$currency,'description'=>$info->description,'payment_date'=>now());
                Mail::send('admin.email.mailAdmin', $data, function($message){
                    $message->from('sarey@gmail.com','Sarey.co');
                    $message->to("mustafadeveloeper2@gmail.com", 'Admin');
                    $message->subject('Payment For Admin report');
                }); // Sent Email For Admin


                $data = array('invoice_number'=>$info->invoice_number,'amount'=>$info->amount,'currency'=>$currency,'payment_date'=>now());
                Mail::send('admin.email.mailThanks', $data, function($message) use($client_email,$client_name){
                    $message->from('sarey@gmail.com','Sarey.co');
                $message->to($client_email, $client_name);
                $message->subject('Payment Sarey Software Solution Mail');
                
                });
        
                // Create Incomes data
                $income=new Incomes();
                $income->invoice_number=$info->invoice_number;
                $income->project_id=$info->project_id;
                $income->amount=$request->amount;
                $income->payment_method="Stripe";
                $income->Currency=$request->currency;
                $income->save();// Create Incomes data

                
                $info->status="Paid";
                $info->save();


                $client=Clients::find($email->id);
                $notification=new Notifications();
                $notification->client_id=$client->id;
                $notification->description=$client->email.' paid '.$currency.' '.$info->amount.' for the '. $project->project_name.' project via Stripe';
                $notification->save();

                return redirect('payment-success');
            }
        }
  
        Session::flash('warning', 'please check Your details.');
        return redirect()->back();
    }
    



}
