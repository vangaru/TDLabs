<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:web');
    }

    
}
