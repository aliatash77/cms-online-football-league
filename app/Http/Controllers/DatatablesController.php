<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{

    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(User::select([
                'id','name' , 'email', 'created_at','psnId','city','mobile','tickets','rank'
            ]))
                ->addIndexColumn()
                ->addColumn('action', function($data){

                    $editUrl = url('edit-User/'.$data->id);
                    $btn = '<a href="'.$editUrl.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('list-User');
    }

    /* Display User add form */

    public function create()
    {
        return view('add-User');
    }

    /* insert User list into mysql database*/

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'psnId','mobile','city',

        ]);
        $check = User::create($data);
        return Redirect::to("list")->withSuccess('Great! User has been inserted');
    }



    public function edit(Request $request, $id)
    {

        $data['User'] = User::where('id', $id)->first();

        if(!$data['User']){
            return redirect('/list');
        }
        return view('edit-User', $data);
    }



    public function update(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if(!$request->id){
            return redirect('/list');
        }

        $check = User::where('id', $request->id)->update($data);
        return Redirect::to("list")->withSuccess('Great! User has been updated');
    }



    public function delete(Request $request, $id)
    {
        $check = User::where('id', $id)->delete();

        return \Illuminate\Auth\Access\Response::json($check);
    }


}
