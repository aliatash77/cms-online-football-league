<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(){
        $categories = Category::all();
        $posts = Post::orderBy('id','desc')->get();
        return view('client.newsList',compact('categories','posts'));
    }

    public function  news($id){
        $categories = Category::all();
        $posts = Post::where('id',$id)->first();
        $postCategory= Category::where('id',$posts->category_id)->first();
        return view('client.news',compact('posts','categories','postCategory'));
    }

    public function create(){
        $categories =Category::all();
        $post= Post::all();
        return view('admin.posts.post',compact('post','categories'));
    }

    public function store(Request $request){
        post::create($request->all());
        return redirect()->back();
    }

    public function index(){
        $categories =Category::all();
        $posts=post::all();
        return view('admin.posts.postList',compact('posts','categories'));
    }

    public function delete($id){
        $post = post::find($id);

        $post->delete();
        return redirect()->back();
    }

    public function edit($id){
        $post = post::find($id);
        $categories=Category::all();
        return view('admin.posts.Editpost',compact('post','categories'));
    }

    public function update($id , Request $request){
        post::find($id)->update($request->all());
        return redirect('dashboard/post/index');
    }
}
