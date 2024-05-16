<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class WelcomeController extends Controller
{
    public function index(){

        $data["products"] = Product::all();

        return view( 'welcome', $data );
    }
}