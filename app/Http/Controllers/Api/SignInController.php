<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SignInController extends Controller
{
    //
    public function SignIn(Request  $request){
        // $access_token = Request::header('Authorization');
        $headers = apache_request_headers();
        // dd($headers['Authorization']);
        return ($headers);
    }
}
