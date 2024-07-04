<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
class transactionController extends Controller
{
    //
    public function index(){
        $payments=Payment::leftJoin('users', 'users.id', '=', 'payments.user_id')->get();
        return view("admin.report.transaction",compact("payments"));
    }
    public function complete(Request $request){
        $payments=Payment::leftJoin('users', 'users.id', '=', 'payments.user_id')->where("pay_status",'=',0)->get();
        return view('admin.report.complete',compact('payments'));
    }
    public function weekly(Request $request){
        $payments=Payment::leftJoin('users', 'users.id', '=', 'payments.user_id')->where("flag",'=',0)->get();
        return view('admin.report.weekly',compact('payments'));
    }
    public function monthly(Request $request){
        $payments=Payment::leftJoin('users', 'users.id', '=', 'payments.user_id')->where("flag",'=',1)->get();
        return view('admin.report.monthly',compact('payments'));
    }
}
