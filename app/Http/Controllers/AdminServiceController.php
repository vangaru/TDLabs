<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceAddRequest;
use App\Models\Services;

class AdminServiceController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
	
    public function getService()
    {
    	return view('admin-service', ['labworks' => Services::where('type', '=', 'Лабораторная')->get(),
    								  'courseworks' => Services::where('type', '=', 'Курсовая')->get()]);
    }

    public function addService(ServiceAddRequest $req)
    {
    	$service = new Services();

    	$service->type = $req->input('type');
    	$service->semester = $req->input('semester');
    	$service->description = $req->input('description');
    	$service->price = $req->input('price');
    	$service->terms = $req->input('terms');

    	$service->save();

    	return redirect()->route('admin.service');
    }

    public function getOneService($id)
    {
    	return view('admin-service-redact', ['service' => Services::find($id)]);
    }

    public function deleteService($id)
    {
    	Services::find($id)->delete();

    	return redirect()->route('admin.service');
    }

    public function redactService($id, ServiceAddRequest $req)
    {
    	$service = Services::find($id);

    	$service->type = $req->input('type');
    	$service->semester = $req->input('semester');
    	$service->description = $req->input('description');
    	$service->price = $req->input('price');
    	$service->terms = $req->input('terms');

    	$service->save();

    	return redirect()->route('admin.service');
    }
}
