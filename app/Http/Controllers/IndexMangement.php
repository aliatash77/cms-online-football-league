<?php

namespace App\Http\Controllers;

use App\Page;
use App\Pageimage;
use Illuminate\Http\Request;

class IndexMangement extends Controller
{
    public function show(){
            $pages =Page::all();
        return view('admin.manage.indexManage',compact('pages'));
    }

    public function store(Request $request ,$id){
        $image =Pageimage::create($request->all());
        return redirect()->back();
    }

    public function select(){
        $pages =Page::all();
        return view('admin.manage.select',compact('pages'));
    }

}
