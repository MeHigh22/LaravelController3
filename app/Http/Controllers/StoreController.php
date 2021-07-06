<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varabout;
use App\Models\Varstore;
use App\Models\Hour;

class StoreController extends Controller
{
    public function index()
    {
        $varAdresse = Varstore::all();
        $varDays = Hour::all();
        $varAbout = Varabout::all();
        return view('pages.store', compact("varDays","varAdresse","varAbout"));
    }
}
