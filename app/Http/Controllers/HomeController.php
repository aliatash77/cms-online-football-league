<?php

namespace App\Http\Controllers;

use App\Page;
use App\Pageimage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('client.index');
    }
}
