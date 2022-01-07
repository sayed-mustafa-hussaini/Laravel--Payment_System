<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Clients;
use App\Models\Projects;
use App\Models\Incomes;
use App\Models\activityLogs;
use Helper;

class IncomesController extends Controller
{
    public function index()
    {
        $incomes=Incomes::orderBy('created_at','DESC')->get();
        return view('admin.incomes.index',compact('incomes'));
    }


    

    public function destroy($id)
    {
        Helper::addActivityLog('delete income');
        Incomes::find($id)->delete();
        return response()->json(['success'=>'Record successfully deleted']);    
    }
}
