<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $startOfWeek = Carbon::today()->startOfWeek();
        $endOfWeek = Carbon::today()->endOfWeek();

        // Fetch users registered within the current week
        $registeredUsers = User::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
        $today = Carbon::today();

        // Fetch users registered today
        $usersRegisteredToday = User::whereDate('created_at', $today)->count();

        $from = Carbon::today()->startOfMonth(); // First day of the current month
        $to = Carbon::today()->endOfMonth(); // Last day of the current month

        $usersRegisteredThisMonth = User::whereBetween('created_at', [$from, $to])->count();
        $users=User::where("active",1)->count();
        $pending=User::where("active",0)->count();
        $payment = Payment::where('pay_status',1)->count();
        $weekly=Payment::where('pay_status',1)->where('flag',0)->count();
        $monthly=Payment::where('pay_status',1)->where('flag',1)->count();
        $output=array(
        "users"=>$users,
        "pending"=>$pending,
            "daily"=>$usersRegisteredToday,
            "weekly"=>$registeredUsers,
            "monthly"=>$usersRegisteredThisMonth,
            'payment'=>$payment,
            'weekly_pay'=>$weekly,
            'monthly_pay'=>$monthly
        );
        return view("admin.dashboard",compact("output"));
    }
    public function subscription(){

        $output=array(

        );
        return view("admin.subscription.subscription",compact('output'));
    }
}
