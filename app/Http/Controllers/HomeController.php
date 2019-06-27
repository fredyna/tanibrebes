<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Product;
use App\Tani;

class HomeController extends Controller
{
    public function index()
    {
        $data['about']  = About::get()->first();
        $data['products'] = Product::orderBy('created_at', 'desc')->limit(8)->get();
        return view('home')->with($data);
    }

    public function product()
    {
        $data['about']  = About::get()->first();
        $data['products'] = Product::orderBy('created_at', 'desc')->paginate(12);
        return view('product')->with($data);
    }

    public function tani()
    {
        $data['tanis'] = Tani::all();
        $data['about']  = About::get()->first();
        return view('tani')->with($data);
    }
}
