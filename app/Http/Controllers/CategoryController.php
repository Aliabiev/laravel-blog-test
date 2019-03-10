<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //выводит все картегории
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //вывод формы для создания категрории
    public function create()
    {
        return view('category.create');
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Принимаем данные с формы создания и добавляем категорию в БД
    public function store(Request $request)
    {
        $this->validate($request, [
        'categoryName'=>'required|min:4|max:32'
        ]);
        $category = new Category();
        $category->name = $request->categoryName;
        $category->description = $request->categoryDesc;
        $category->save();
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //показывает данные конкретной категории
    public function show($id)
    {
        //$news = News::where('category_id', '=', $id)->get(); выводит все записи
        //$news = News::where('category_id', '=', $id)->paginate(3);
        $news = News::where('category_id', '=', $id)->simplePaginate(3);
        $category = Category::find($id);
        return view('category.show', compact('news', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //форма редактирования категории с введенными данными
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //получает данные с формы редактирования и обновляет запись в БД
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'categoryName'=>'required|min:4|max:32'
        ]);
        $category = Category::find($id);
        $category->name = $request->categoryName;
        $category->description = $request->categoryDesc;
        $category->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // удаление категории
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');

    }
}
