<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\free;
use App\Models\Payment;
use Carbon\Carbon;
class GoogleController extends Controller
{
    public function loginWithGoogle(Request $request)
    {
        session(['invite' => $request->google_invite]);
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        $invite = session('invite');
        try {
            $user = Socialite::driver('google')->user();
            // Check Users Email If Already There
            $csrfToken = csrf_token();
            $is_user = User::where('email', $user->getEmail())->first();
            $new_sessid   = \Session::getId(); //get new session_id after user sign in
            $last_session = $is_user->session_id; // retrive last session

            if ($last_session) {

                \Session::flash('token_mismatch',"Multi user not be allowed to login with a same account in same time");
                return redirect()->route('login');
            }

            if (!$is_user) {

                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ], [
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'email' => $user->getEmail(),
                    'password' => Hash::make(12345678),
                    "token"=> $csrfToken,
                    'session_id'=>$new_sessid
                ]);
                if ($saveUser->wasRecentlyCreated) {
                    if ($invite) {
                        $invite = free::where('invite','=', $invite)->first();
                        if ($invite) {
                            $invite->invite_userid = $saveUser->id;;
                            $invite->save();
                            $pay=Payment::where('payments.user_id','=', $invite->user_id)->where('payments.pay_status','=',1)->first();
                            $end=Carbon::parse($pay->pay_ended);
                            $date=$end->addDays(7)->format('Y-m-d');
                            $pay->pay_ended = $date;
                            $pay->save();
                        }
                    }
                }

            } else {
                $saveUser = User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                    'session_id'=>$new_sessid
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }


            Auth::loginUsingId($saveUser->id);

            return redirect()->route('payment');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
