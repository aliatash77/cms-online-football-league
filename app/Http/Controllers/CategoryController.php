<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $categories= Category::all();
        return view('admin.categories.category',compact('categories'));

    }

    public function store(Request $request){

        Category::create($request->all());
        return redirect()->back();
    }

    public function index(){

        $categories=Category::all();
        return view('admin.categories.CategoryList',compact('categories'));
    }

    public function delete($id){

        $category = Category::find($id);
        Category::where('parent_id',$category->id)->update(['parent_id'=>null]);
        $category->delete();
        return redirect()->back();
    }

    public function edit($id){

        $category = Category::find($id);
        $categories=Category::all();
        return view('admin.categories.EditCategory',compact('category','categories'));

    }

    public function update($id,Request $request){

        Category::find($id)->update($request->all());
        return redirect('dashboard/category/index');
    }
}
