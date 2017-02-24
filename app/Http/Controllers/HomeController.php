<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories; 
use App\Subcategories; 
use App\Videos; 


class HomeController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function displaycategories(Request $request)
    {
		if($request->input('category') == null){
		$categories = Categories::all();
        return view('videos', compact('categories'));
		} else {
	    $subcategories = Subcategories::where('cat_id',$request->input('category'))->get();
		$videos = Videos::leftJoin('subcategories', 'videos.sub_id', '=', 'subcategories.id')->select('videos.*')->get();
		return view('catvideos', compact('subcategories', 'videos'));
		}
    }	
	
}
