<?php

namespace App\Http\Controllers;
use App\Models\Varabout;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $varAbout = Varabout::all();
        return view('pages.about', compact('varAbout'));
}
}

