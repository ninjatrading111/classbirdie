<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use App\Models\free;
use App\Models\Payment;
use Carbon\Carbon;
// use Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        $error = array();
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $message) {
                $error[] = "<div >" . $message . "</div>";
            }
            return response()->json(['error' => $error, 'status' => 3], 200);
        }
        $user = User::where('users.email', $request->email)
            ->first();
        if (!$user) {
            return response()->json(['message' => 'You entered an incorrect email address .', 'status' => 0], 200);
        }

        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            $new_sessid = \Session::getId(); //get new session_id after user sign in
            $last_session = \Session::getHandler()->read(Auth::user()->session_id);  // retrive last session
            // dd($last_session);
            if ($last_session) {
                Auth::logout();
                return response()->json(['message' => 'User already logged in', 'status' => 0, 'data' => $user], 200);
            }

            Auth::user()->session_id = $new_sessid;
            Auth::user()->save();

            if ($request->invite) {
                $invite = free::where('invite', '=', $request->invite)->first();
                if ($invite) {
                    $invite->invite_userid = Auth::user()->id;
                    $invite->save();
                    $pay = Payment::where('payments.user_id', '=', $invite->user_id)->where('payments.pay_status', '=', 1)->first();
                    $end = Carbon::parse($pay->pay_ended);
                    $date = $end->addDays(7)->format('Y-m-d');
                    $pay->pay_ended = $date;
                    $pay->save();
                }
            }
            User::where("email", '=', $request->email)
                ->update(array('login_time' => now()));
            return response()->json(['message' => 'You have logined successfully', 'status' => 1, 'data' => $user], 200);
        } else
            return response()->json(['message' => 'You entered an incorrect password .', 'status' => 0], 200);
    }
    public function logout(Request $request)
    {
        if (Auth::user()->session_id != null) {
            Auth::user()->session_id = null;
            Auth::user()->save();
        }
        Auth::logout();
        return redirect()->route('welcome');
    }
}
