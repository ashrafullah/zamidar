<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend()
    {
    
    	return view('frontend.index');
    }
    public function products()
    {
    
    	return view('frontend.products');
    }
    public function product_page()
    {
    
    	return view('frontend.product_page');
    }
}
