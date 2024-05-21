<?php

namespace App\Http\Controllers;

use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Flight; 

class SearchFlightController extends Controller
{
    //
    public function search(request $request){
        $From=$request->get("from");
        $travel=$request->get("travel");
        $To=$request->get("to");
        $date=$request->get("date");
        $number=$request->get("numberOfPeople");
     //conformity of the data   
     $From=strtolower($From);
     $To=strtolower($To);


    //The only cities allowed in this case scenario    

 $cities=array("nairobi","mombasa","kisumu","eldoret");

 if (!in_array($From, $cities) || !in_array($To, $cities)) {
    return response()->json([
        "success" => "false",
        "message" => "Cities allowed are nairobi, mombasa, kisumu, eldoret"
    ]);
}
//Making sure number of people dont exceed 3

if (intval($number) > 3) {
    return response()->json([
        "success" => "Failed",
        "message" => "Passengers cannot be greater than three"
    ]);
} elseif (intval($number) < 0) {
    return response()->json([
        "success" => "Failed",
        "message" => "Passengers cannot be less than 0"
    ]);
}

$date = new DateTime($date);
$now = new DateTime();
$now->setTime(0, 0, 0);

//check the if the date is in the past
if ($date < $now) {
    return response()->json([
        "error" => true,
        "message" => "The date provided is in the past."
    ]);
}


$flights = Flight::where('from', $From)
            ->where('to', $To)
            ->whereDate('date', $date->format('Y-m-d'))
            ->get();

if ($flights->isEmpty()) {
            return response()->json([
                "success" => "false",
                "message" => "No flights available for the specified criteria."
            ]);
        }



return view('flights', ['flights' => $flights]);

 }
}