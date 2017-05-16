<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests\PageRequest;

class CMSController extends Controller
{
	/**
	 * Return if a page exists, based on URL.
	 * 
	 * @param string $route
	 * @return boolean
	 */
	private function pageExist($route) {
		return count(Page::where('url', '=', $route)->get())>0;
	}
	
	/**
	 * Return page if exists, return 404
	 * if page does not exist in database.
	 * @param string $page
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
    public function index($page) {
    	if($this->pageExist($page)) {
    		return view('cms')->with(array(
    			'page' => Page::where('url', '=', $page)->first(),
    		));
    	} else {
    		return view('errors.404');
    	}
	}
	
	/**
	 * Create a page.
	 * 
	 * @param PageRequest $request
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
	public function createPage(PageRequest $request) {
		if(Storage::exists($request->url . '.txt')) {
			return view('errors.admin.fileExists');
		} else {
			Storage::put($request->file . '.txt', $request->content); // Create and save contents to file.
			$page = new Page;
			$page->url = $request->url;
			$page->file = $request->file;
			return view('home')->with('message', __('cms.create.page.success'));
		}
	}
	
	/**
	 * 
	 */
	public function deletePage() {
		//TODO:Body
	}
}
