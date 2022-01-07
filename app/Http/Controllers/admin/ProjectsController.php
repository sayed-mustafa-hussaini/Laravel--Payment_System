<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Projects;
use App\Models\Clients;
use App\Models\Invoice;
use App\Models\activityLogs;
use Helper;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects=Projects::orderBy('created_at','DESC')->get();
        $clients=Clients::orderBy('created_at','DESC')->get();
        return view('admin.projects.projects',compact('projects','clients'));
    }

    public function store(Request $request)
    {
        $datavalidate=$request->validate([
            'project_name'=>'required',
            'client_email'=>'required',
            'start_date'=>'required',
            'deadline'=>'required',
            'status'=>'required',
            'total_price'=>'required',
            'currency'=>'required',
        ]);
        if($datavalidate)
        {
            Helper::addActivityLog('add new project');
            $project=new Projects();
            $project->project_name=$request->project_name;
            $project->client_id=$request->client_email;
            $project->start_date=$request->start_date;
            $project->deadline=$request->deadline;
            $project->status=$request->status;
            $project->total_price=$request->total_price;
            $project->currency=$request->currency;
            $project->description=$request->description;
            $project->save();
            return response()->json(['success'=>'Project added successfully']); 
        }
    }

    public function edit($id)
    {
        $project=Projects::find($id);
        return Response()->json($project);  
    }

    public function update(Request $request)
    {
        $datavalidate=$request->validate([
            'project_name'=>'required',
            'client_email'=>'required',
            'start_date'=>'required',
            'deadline'=>'required',
            'status'=>'required',
            'total_price'=>'required',
            'currency'=>'required',
        ]);
        if($datavalidate)
        {
            Helper::addActivityLog('update project');
            $project=Projects::find($request->hidden_id);
            $project->project_name=$request->project_name;
            $project->client_id=$request->client_email;
            $project->start_date=$request->start_date;
            $project->deadline=$request->deadline;
            $project->status=$request->status;
            $project->total_price=$request->total_price;
            $project->currency=$request->currency;
            $project->description=$request->description;
            $project->save();
            return response()->json(['success'=>'Clients updated successfully']); 
        }
    }

    public function destroy($id)
    {
        Helper::addActivityLog('delete project');
        Projects::find($id)->delete();
        return response()->json(['success'=>'Record successfully deleted']);    
    }

    public function info($id)
    {
        $project=Projects::find($id);
        $total_invoice=Invoice::where('project_id',$project->id)->count();
        $invoice_unsent=Invoice::where('project_id',$project->id)->where('status','Unsent')->count();
        $invoice_sent=Invoice::where('project_id',$project->id)->where('status','Sent')->count();
        $invoice_paid=Invoice::where('project_id',$project->id)->where('status','Paid')->count();
        $invoices=Invoice::where('project_id',$project->id)->orderBy('created_at','DESC')->get();
        return view('admin.projects.info',compact('project','invoices','total_invoice','invoice_unsent','invoice_sent','invoice_paid'));
    }

}
