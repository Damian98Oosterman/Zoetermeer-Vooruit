<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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
  		if(strlen($request->html) > 1) {
  			Storage::disk('local')->put('home.txt', $request->html);
  			return Redirect::to('home')->with('message', 'Page succesfully edited');
  		} else {
  			return Redirect::to('home')->with('error', 'That is not a valid page. please enter more than 1 character.');
  		}
  	}
}
