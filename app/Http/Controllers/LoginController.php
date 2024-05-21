<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login (Request $request){

        $email= $request->get("email");
        $password= $request->get("password");
                                   
       echo $password;
    }
}
