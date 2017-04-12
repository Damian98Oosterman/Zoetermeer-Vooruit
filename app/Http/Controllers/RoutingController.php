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

  public function landing(){
    return redirect('welcome');
  }

  public function statistics($id) {
  	$this->middleware('admin');
  	return view('quiz.statistics')->with(array(
  			'id' => $id,
  	));
  }

  public function about(){
    return view('about');
  }
}
