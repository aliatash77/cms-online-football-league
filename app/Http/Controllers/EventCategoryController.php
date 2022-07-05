<?php

namespace App\Http\Controllers;

use App\EventCat;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function create(){
        $categories= EventCat::all();
        return view('admin.events.categories.category',compact('categories'));

    }

    public function store(Request $request){

        EventCat::create($request->all());
        return redirect()->back();
    }

    public function index(){

        $categories=EventCat::all();

        return view('admin.events.categories.CategoryList',compact('categories'));
    }

    public function delete($id){
        $category = EventCat::find($id);
        EventCat::where('parent_id',$category->id)->update(['parent_id'=>null]);
        $category->delete();
        return redirect()->back();
    }

    public function edit($id){

        $category = EventCat::find($id);
        $categories=EventCat::all();
        return view('admin.events.categories.EditCategory',compact('category','categories'));

    }

    public function update($id,Request $request){

        EventCat::find($id)->update($request->all());
        return redirect('dashboard/EventCategory/index');
    }
}
