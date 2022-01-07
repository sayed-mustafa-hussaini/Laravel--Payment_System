<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Projects;
use App\Models\Clients;
use App\Models\Incomes;
use Mail;
use Session;
use App\Models\Notifications;
   
class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function payment($id)
    {
        $info=Invoice::find($id);

        if($info->status=="Sent")
        {
            $project=Projects::find($info->project_id);
            $email=Clients::find($project->client_id);
            $client_email=$email->email;
            $client_name=$email->name;
           
            // Paypal Code
            env('PAYPAL_CURRENCY','EUR');
            $data = [];
            $data['items'] = [
                [
                    'name' => $client_name,
                    'price' => $info->amount,
                    'desc'  => $info->description,
                    'qty' => 1
                ]
            ];
           
            $data['invoice_id'] = $info->invoice_number;
            $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
            $data['return_url'] = route('payment.success');
            $data['cancel_url'] = route('payment.cancel');
            $data['total'] = $info->amount;
            $data['currency'] = 'EUR';
            $provider = new ExpressCheckout;
            $response = $provider->setExpressCheckout($data);
            $response = $provider->setExpressCheckout($data, true);            // Paypal Code


            $currency='';
            if ($project->currency=='EUR'){
                $currency= '€';
            }elseif($project->currency=='GBP'){
                $currency= '£';
            }else{
                $currency= '$';
            }

            // Sent Email For Admin
            $data = array('invoice_number'=>$info->invoice_number,'amount'=>$info->amount,'project_name'=>$project->project_name,'method'=>'Paypal','client_email'=>$client_email,'client_name'=>$client_name,'currency'=>$currency,'description'=>$info->description,'payment_date'=>now());
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
            $income->amount=$info->amount;
            $income->payment_method="Paypal";
            $income->currency=$project->currency;
            $income->save();// Create Incomes data

            $info->status="Paid";
            $info->save();

            $client=Clients::find($email->id);
            $notification=new Notifications();
            $notification->client_id=$client->id;
            $notification->description=$client->email.' paid '.$currency.' '.$info->amount.' for the '. $project->project_name.' project via Stripe';
            $notification->save();



            return redirect($response['paypal_link']);

        }else{
            Session::flash('warning', 'please check Your details.');
            return redirect()->back();
        }


      
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        Session::flash('warning', 'Your payment is canceled.');
        return redirect()->back();
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            
            return redirect('payment-success');
        }
  
        Session::flash('warning', 'Something is wrong.');
        return redirect()->back();
    }
}