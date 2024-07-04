<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $invite='';
        $requestUri = request()->getRequestUri();
        if (!empty($requestUri)) {
            $cleanedString = ltrim($requestUri, '/?');
            $parts = explode("=", $cleanedString);
            if(!empty($parts[0]) && !empty($parts[1]))
            $invite = $parts[1];
        }
        return view("welcome", compact("invite"));
    }
}
