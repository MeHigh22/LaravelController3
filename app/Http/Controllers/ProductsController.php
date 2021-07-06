<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varproduct;

class ProductsController extends Controller
{
    public function index()
    {
        $varProducts = Varproduct::all();
        return view('pages.products', compact('varProducts'));
}
}
