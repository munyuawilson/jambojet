<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    function signUp(Request $request){
        $name = $request->get("name");
        $email= $request->get("email");
        $password= $request->get("password");
        $phone_number= $request->get("phone");

//check if the user exists

        $user = User::where("email",$email)->first();


    if ($user){
    
        
        return response()->json(["status"=> "Error","message"=> "User already there"]);
    }
//if not we can now hash the password and also save the other details

    else{
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->phone_number = $phone_number;
        $user->ticket_no=0;
        $user->save();
        
        return response()->json(["status"=> "Success","message"=> "Details saved"]);
    }


        



    }
}
