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
use App\Models\Incomes;
use Helper;


class DashboardController extends Controller
{
    public function index()
    {
        $total_incomes=Incomes::sum('amount');
        $total_projects=Projects::count();
        $total_client=Clients::count();
        $date_project=DB::select('SELECT  year(created_at) as year,count(id) as total FROM projects  GROUP BY year ');
        $price=DB::select('SELECT monthName(created_at) as month , year(created_at) as year,sum(amount) as total FROM incomes  GROUP BY year,month ');
        $clients=Clients::orderBy('created_at','DESC')->get();
        return view('dashboard',compact('total_incomes','total_projects','total_client','date_project','price'));
    }
}
