<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\free;
use Carbon\Carbon;
use App\Models\Payment;
class DashboardController extends Controller
{
    //
    public function index()
    {
        $output=array();
        $create_date = now()->format('Y-m-d');
            $payment = Payment::where("payments.user_id", "=", \Auth::user()->id)->where("pay_status", "=",1)->first();
            if($payment){
                $startDate = Carbon::parse($create_date);
                $endDate = Carbon::parse($payment->pay_ended);
                $differenceInDays = $endDate->diffInDays($startDate);
                if($differenceInDays==0){
                    $payment->pay_status==0;
                    $payment->save();
                    $pay_messages="Your bought expired";
                    return redirect()->route('payment');
                }
                $pay_messages=" You bought ".$differenceInDays." days";
            $output["messages"] = $pay_messages;
            }else{
                return redirect()->route('payment');
            }
        $hostName = $_SERVER['HTTP_HOST'];
        $ref = Str::random(30);
        $url = '' . $hostName . '?ref=' . $ref . '';
        free::create([
            'user_id' => \Auth::user()->id,
            'invite' => $ref,
        ]);
        $output['url']= $url;
        return view("frontend.dashboard", compact("output"));
    }
}
