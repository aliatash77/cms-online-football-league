<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id){
        $user = User::find($id);
        return view('client.profile',compact('user'));
    }
    public function update($id , Request $request){
        User::find($id)->update($request->all());
        return redirect('/');
    }

    public function users(){
        return view('admin.user');
    }
}
