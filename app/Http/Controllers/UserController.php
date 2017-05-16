<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function editForm() {
    	return view('user.form');
    }
    
    public function list() {
    	return view('user.list')->with(array(
    		'users' => User::all(),
    	));
    }
}
