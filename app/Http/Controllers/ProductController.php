<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index($product = null)
    {
        return "Welcome to paradise $product" ;
    }
}
