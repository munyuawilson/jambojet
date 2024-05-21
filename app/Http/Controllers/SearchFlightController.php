<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchFlightController extends Controller
{
    //
    public function search(request $request){
        $From=$request->get("from");
        $travel=$request->get("travel");
        $To=$request->get("to");
        $date=$request->get("date");
        $number=$request->get("numberOfPeople");
        echo $travel;
       
if ($number>3    ){

}    

    }
}
