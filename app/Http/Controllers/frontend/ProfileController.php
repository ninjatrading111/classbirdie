<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Validator;
use App\Models\Payment;
class ProfileController extends Controller
{
    public function index()
    {
        $payments=Payment::where("payments.user_id", Auth::user()->id)->get();
        return view("frontend.profile",compact("payments"));
    }
    public function profiledit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->ajax()) {
                $data = User::where("id", "=", Auth::user()->id)->first();
                $data->update([
                    "first_name" => $request->firstname,
                    "last_name" => $request->lastname,
                ]);
                return response()->json(['message' => 'success']);
            } else {
                return back();
            }
        }
    }
    public function getdata(Request $request)
    {
        if ($request->ajax()) {
            $userdata = User::where('id', '=', Auth::user()->id)->first();
            return response()->json($userdata);
        } else
            return back();
    }
}
