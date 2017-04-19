<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Quiz;

class RoutingController extends Controller
{

	public function contact(){
    	return view('contact');
  	}

  	public function editHome() {
  		return view('editor')->with(array(
  				'file' => 'home.txt',
  				'route' => '/home/edit',
  				'title' => __('edit.title.page.home'),
  		));
  	}

  	public function editAbout() {
  		return view('editor')->with(array(
			'file' => 'about.txt',
			'route' => '/about/edit',
			'title' => __('edit.title.page.about'),
		));
  	}

  	public function saveHTML(Request $request) {
  		if(strlen($request->html) > 1) {
  			Storage::disk('local')->put('home.txt', $request->html);
  			return Redirect::to('home')->with('message', 'Page succesfully edited');
  		} else {
  			return Redirect::to('home')->with('error', 'That is not a valid page. please enter more than 1 character.');
  		}
  	}

  	public function saveHTMLAbout(Request $request) {
  		if(strlen($request->html) > 1) {
  			Storage::disk('local')->put('about.txt', $request->html);
  			return Redirect::to('home')->with('message', 'Page succesfully edited');
  		} else {
  			return Redirect::to('home')->with('error', 'That is not a valid page. please enter more than 1 character.');
  		}
  	}

  public function landing(){
    return view('welcome');
  }

  public function statistics($id) {
  	$this->middleware('admin');
  	return view('quiz.statistics')->with(array(
  			'quiz' => Quiz::find($id),
  	));
  }

  public function about(){
    return view('about');
  }
}
