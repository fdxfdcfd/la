<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    }
    public function about(){
		return view('pages.about');
	}
	public function contact(){
		return view('pages.contact');
	}
}
