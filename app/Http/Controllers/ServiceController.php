<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function getService()
    {
    	return view('service', ['labworks' => Services::where('type', '=', 'Лабораторная')->get(),
    						    'courseworks' => Services::where('type', '=', 'Курсовая')->get()]);
    }
}
