<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Projects;
use App\Models\Clients;
use Mail;
use App\Models\activityLogs;
use Helper;

class InvoiceController extends Controller
{
    public function show($id)
    {
        $invoice=Invoice::orderBy('id','DESC')->where('project_id',$id)->get();
        return response()->json($invoice); 
    }

    public function store(Request $request)
    {
        $datavalidate=$request->validate([
            'invoice_number'=>'required',
            'project_name'=>'required',
            'Invoice_amount'=>'required',
            'status'=>'required',
            'deadline'=>'required',
        ]);

        if($datavalidate)
        {
            Helper::addActivityLog('add new invoice');
            $invoice=new Invoice();
            $invoice->invoice_number=$request->invoice_number;
            $invoice->project_id=$request->project_name;
            $invoice->amount=$request->Invoice_amount;
            $invoice->status=$request->status;
            $invoice->deadline=$request->deadline;
            $invoice->description=$request->description;
            $invoice->save();
            return response()->json(['success'=>'Invoice added successfully']); 
        }
    }


    
    public function edit($id)
    {
        $invoice=Invoice::find($id);
        return Response()->json($invoice);  
    }





    public function update(Request $request)
    {
        if($request->status=="Unsent")
        {
            $datavalidate=$request->validate([
                'invoice_number'=>'required',
                'project_name'=>'required',
                'Invoice_amount'=>'required',
                'status'=>'required',
                'deadline'=>'required',
            ]);
        }
        else{
            $datavalidate=$request->validate([
                'invoice_number'=>'required',
                'project_name'=>'required',
                'Invoice_amount'=>'required',
                'status'=>'required',
                'sent_date'=>'required',
                'deadline'=>'required',
            ]);
        }

        if($datavalidate)
        {
            Helper::addActivityLog('update invoice');
            $invoice=Invoice::find($request->invoice_hidden_id);
            $invoice->project_id=$request->project_name;
            $invoice->amount=$request->Invoice_amount;
            $invoice->status=$request->status;
            $invoice->sent_date=$request->sent_date;
            $invoice->deadline=$request->deadline;
            $invoice->description=$request->description;
            $invoice->save();
            return response()->json(['success'=>'Invoice updated successfully']); 
           
        }
                
    }




    public function destroy($id)
    {
        Helper::addActivityLog('delete invoice');
        Invoice::find($id)->delete();
        return response()->json(['success'=>'Record successfully deleted']);    
    }

    
    public function sentInvoice($id)
    {
        $invoice=Invoice::find($id);
        $project=Projects::find($invoice->project_id);
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
        
        $data = array('id'=>$invoice->id,'invoice_number'=>$invoice->invoice_number,'amount'=>$invoice->amount,'project_name'=>$project->project_name,'currency'=>$currency,'deadline'=>$project->deadline,'description'=>$invoice->description);
        Mail::send('mail', $data, function($message) use($client_email,$client_name){
            $message->from('sarey@gmail.com','Sarey.co');
           $message->to($client_email, $client_name);
           $message->subject('Payment Sarey Software Solution Mail');
           
        });
    
        Helper::addActivityLog('sent invoice');

        $invoice->status='Sent';
        $invoice->sent_date=now();
        $invoice->save();
        return response()->json(['success'=>'Invoice successfully Sent']);
    }


    public function invoiceShow($id)
    {
        $invoice=Invoice::find($id);
        return response()->json($invoice); 
    }
    
}
