<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login (Request $request){

        $email= $request->get("email");
        $password= $request->get("password");
                                   
       if ($email && $password){

    $user = User::where("email",$email)->first();
    if ($user){
        if (Hash::check($password, $user->password)) {
           //Save the details in the Db 
           //Decrease the MAX of people in Flights table/model
           //if the flight is fully booked the Max is 0 and should not be selected
           //Generate a ticket number
           //Save ticket number on the user table
            return response()->json(["status" => "success", "message" => "Login successful. Flight booked"]);
        }
        else{
            return response()->json(["status"=> "error", "message"=> "Wrong password!"]);
        }
        //$user->password = Hash::make($password);
        //$user->save();
        //return response()->json(["status"=> "success","message"=> "Login succesfull Flight booked"]);
    }
    else{
        return response()->json(["status"=> "error","message"=> "User not found!"]);
    }
}
    }
}