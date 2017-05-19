<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests\PageRequest;
use App\Http\Requests\SaveFileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
    		return view('cms.page')->with(array(
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
			$time = time();
			Storage::put($request->file . "-$time.txt", $request->content); // Create and save contents to file.
			$page = new Page;
			$page->url = $request->file;
			$page->file = $request->file . "-$time.txt";
			$page->hidden = intval($request->hidden);
			$page->hash = md5($request->content);
			$page->owner = Auth::user()->id;
			$page->save();
			return view('home')->with('message', __('cms.page.create.success'));
		}
	}
	
	/**
	 * 
	 */
	public function deletePage(Request $request) {
		
	}
	
	public function createForm() {
		return view('cms.create');
	}
	
	public function editPage(SaveFileRequest $request) {
		if($request->content === Storage::get($request->file)) {
			return redirect('home')->with('error', __('cms.page.save.fail'));
		} else {
			$time = time();
			$page = Page::where('url', '=', $request->file)->first();
			$file = $page->url . "-$time.txt";
			Storage::put($file, $request->content);
			$page->hash = md5(Storage::get($file));
			$page->owner = Auth::user()->id;
			$page->file = $file;
			$page->save();
		}
		return redirect('home')->with('message', __('cms.page.save.success'));
	}
}
