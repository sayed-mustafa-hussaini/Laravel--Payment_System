<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Clients;
use App\Models\Projects;
use App\Models\Invoice;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\activityLogs;
use Mail;
use Helper;



class ClientsController extends Controller
{
    public function index()
    {
        $clients=Clients::orderBy('created_at','DESC')->get();
        return view('admin.clients.index',compact('clients'));
    }

    public function store(Request $request)
    {
        $datavalidate=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:clients,email',
            'address'=>'required',
        ]);

        if($datavalidate)
        {
            Helper::addActivityLog('add new client');

            $client=new Clients();
            $client->name=$request->name;
            $client->phone=$request->phone;
            $client->email=$request->email;
            $client->address=$request->address;
            $client->save();
            return response()->json(['success'=>'Client added successfully']); 
        }
    }


    
    public function edit($id)
    {
        $client=Clients::find($id);
        return Response()->json($client);  
    }


    public function update(Request $request)
    {
        $client_email=Clients::find($request->hidden_id)->email;

        if($client_email==$request->email)
        {
            $datavalidate=$request->validate([
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'address'=>'required',
            ]);
        }
        else
        {
            $datavalidate=$request->validate([
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required|email|unique:clients,email',
                'address'=>'required',
            ]);
        }
        
        if($datavalidate)
        {

            Helper::addActivityLog('update client');
            $client=Clients::find($request->hidden_id);
            $client->name=$request->name;
            $client->phone=$request->phone;
            $client->email=$request->email;
            $client->address=$request->address;
            $client->save();
            return response()->json(['success'=>'Clients updated successfully']); 
        }
        
    }

    public function destroy($id)
    {
        Helper::addActivityLog('delete client');
        Clients::find($id)->delete();
        return response()->json(['success'=>'Record successfully deleted']);    
    }


    public function information($id){

        try {
            $check=Invoice::get();
            $empty='';
            $invoice_id=Invoice::find(Crypt::decrypt($id));
            $project=Projects::find($invoice_id->project_id);
            $invoice=Invoice::Where('project_id',$project->id)->where('status','Paid')->get();
            $client=Clients::find($project->client_id);
            return view('admin.clients.information',compact('project','invoice','client'));
        } catch (DecryptException $e) {
            abort(404);
        }
       
        
    }
}
