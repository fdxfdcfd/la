<?php

namespace App\Http\Controllers;

use App\Articles;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles= Articles::all();
        return view("pages.articles")->with("articles", $articles);
    }
    public function create(){
         return view("create");
    }
}
