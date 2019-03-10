<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
  public function mainPage(){
	 $news = News::all();
	 return view('main.home', compact('news'));
  } 
  public function form(){
  	return view('main.form');
  }
  public function getData(Request $request){

  	dump($request->user);
  }


}

