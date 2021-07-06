<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varabout;
use App\Models\Varstore;

class StoreController extends Controller
{
    public function index()
    {
        $varOpen =
            (object)[
            "titre" => "Come On In",
            "titreSecond" => "We're Open",
            "closed"=>"Closed"]
            ;
        $varHours = "7:00 AM TO 8:00";
        $varSaturday = "9:00 AM TO 5:00 PM";
        $varAdresse = Varstore::all();
        $varDays = [
            (object)["monday" => "Monday"
            ,"tuesday" => "Tuesday", "wednesday" => "Wednesday","thursday" => "Thursday", "friday" => "Friday", "saturday" => "Saturday", "sunday" => "Sunday"  ]
        ];


        $varAbout = Varabout::all();
        return view('pages.store', compact("varOpen", "varHours", "varSaturday","varDays","varAdresse","varAbout"));
    }
}
