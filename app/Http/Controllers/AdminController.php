<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tani;
use App\Product;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['tani_count'] = Tani::count();
        $data['product_count'] = Product::count();
        return view('welcome')->with($data);
    }
}
