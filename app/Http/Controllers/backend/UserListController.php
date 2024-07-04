<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class UserListController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view("admin.user.userlist",compact("users"));
    }
    public function pending(Request $request){
        if( $request->ajax() ){
            $data=User::where("id","=", $request->id)->first();
            if( $request->action=="pending" ){
                $data->update([
                    "active"=> '0',
                ]);
            }else{
                $data->update([
                    "active"=> '1',
                ]);
            }
            echo json_encode(['message'=>'success']);
        }else return back();
    }
}
