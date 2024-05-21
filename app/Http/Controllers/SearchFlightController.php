<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;


class SearchFlightController extends Controller
{
    //
    public function search(request $request){
        $From=$request->get("from");
        $travel=$request->get("travel");
        $To=$request->get("to");
        $date=$request->get("date");
        $number=$request->get("numberOfPeople");
        
     $From=strtolower($From);
     $To=strtolower($To);
        

 $cities=array("nairobi","mombasa","kisumu","eldoret");

if (in_array($From,$cities) && in_array($To, $cities)){

}else{
return json_encode(array("success"=>"false","message"=>"Cities allowed are nairobi,mombasa,kisumu,eldoret"));
}




if (intval($number)>3){
    json_encode(array("Success"=>"Failed","message"=>"Passengers Cannot be greator than three"));

}
$date = new DateTime($date);
$now = new DateTime();
$now->setTime(0, 0, 0);


if ($date < $now) {
    
    $error = [
        'error' => true,
        'message' => 'The date provided is in the past.'
    ];
    
//output
    echo json_encode($error);
}







 }
}