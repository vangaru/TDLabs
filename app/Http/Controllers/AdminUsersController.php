<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
	public function getUsers()
	{
		return view('admin-users', ['users' => User::all()]);
	}

	public function deleteUser($id)
	{
		User::find($id)->delete();

		return redirect()->route('admin.users');
	}

	public function sort(Request $req)
	{
		$sortType = $req->input('sort');

    	switch($sortType){
    		case 'name':
    			return view('admin-users', ['users' => User::orderBy('name', 'asc')->get()]);
    		case 'old_users':
    			return view('admin-users', ['users' => User::orderBy('created_at', 'asc')->get()]);
    		case 'new_users':
    			return view('admin-users', ['users' => User::orderBy('created_at', 'desc')->get()]);
    		default:
    			return view('admin-users', ['users' => User::all()]);
    	}
	}

}
