<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Collective\Html\FormFacade;

class BackendController extends Controller
{
    
	public function __construct(){ 
		$this->middleware('auth');
		if(!Auth::user()->is_admin) {
			
		}
		
	}
	
}
