<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{
    
	public function getUsers()
	{
		return view('admin-users', ['users' => User::all()]);
	}

}
