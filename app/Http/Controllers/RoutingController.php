<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function welcome() {
    	return view('welcome');
	}

	public function contact(){
    	return view('contact');
  	}

  	public function landing() {
    	return redirect('welcome');
  	}
  	
  	public function editHome() {
  		return view('home-edit');
  	}
  
  	public function saveHTML(Request $request) {
  		Storage::disk('local')->put('home.txt', $request->html);
  	}
}
