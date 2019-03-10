<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news')); 
    }

    public function create()
    {
        $categories = Category::all();
        $categories = $categories->pluck('name','id');
        //dd($categories);
        return view('news.create', compact('categories'));
            
    }

    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->newsTitle;
        $news->content = $request->newsContent;

        $news->category_id = $request->category;
        $img = $request->file('newsImg');
        if($img != null){
            $fName = $img->getClientOriginalName(); //имя файла
            $img->move(public_path().'/uploads', $fName);
            $news->image = '/uploads/'.$fName;
        }

        $news->save();
        return redirect('/news');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        $categories = $categories->pluck('name','id');
        return view('news.edit', compact('news','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,['newsTitle'=>'required|min:4|max:32']);
        $news = News::find($id);
        $news->title = $request->newsTitle;
        $news->content = $request->newsContent;
        $news->category_id = $request->category;
        //$news->image = $request->file('newsImg');
        $img = $request->file('newsImg');
        if($img != null){
            $fName = $img->getClientOriginalName(); //имя файла
            $img->move(public_path().'/uploads', $fName);
            $news->image = '/uploads/'.$fName;
        }
        $news->save();
        return redirect('/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/news');

    }



}