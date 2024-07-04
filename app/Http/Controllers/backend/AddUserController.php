<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
class AddUserController extends Controller
{
    
    public function index(Request $request){
        $user=[];
        if($request->id){
            $user = User::find($request->id);
        }
        return view("admin.user.adduser",compact("user"));
    }
    public function saveuser(Request $request){
        if($request->user_id){
            $validator  =  Validator::make($request->all(), [
                "first_name"=> "required|string",
                "last_name"=> "required|string",
                'password'      => 'required'
            ]);
            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            $user = User::find($request->user_id);
            if($request->email!=$user->email){
                $user->email = $request->email;
            }
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->password = Hash::make($request['password']);
            $user->save();
        }else{
            $validator  =  Validator::make($request->all(), [
                "first_name"=> "required|string",
                "last_name"=> "required|string",
                'email'         => 'required|email|max:255',
                'password'      => 'required'
            ]);
            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            $user=User::create([
                "first_name"=> $request->first_name,
                "last_name"=> $request->last_name,
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'token' => $request['_token']
            ]);
        }

        return redirect()->route('admin.adduser');
    }
}
