<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class HomeController extends Controller
{
    public function index()
    {
        $data['about']  = About::get()->first();
        return view('home')->with($data);
    }
}
