<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varhome;

class HomeController extends Controller
{
    public function index()
    {
        $varHome = Varhome::all();
        return view('home', compact('varHome'));
}
}
