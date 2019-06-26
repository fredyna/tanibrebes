<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Alert;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['about'] = About::get()->first();
        return view('about.index')->with($data);
    }

    public function store(Request $request)
    {
        //update data
        $request->validate([
            'id'    => 'required',
            'name'  => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'description' => 'required'
        ]);

        $about = About::find($request->id)->first();
        $about->name = $request->name;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->description = $request->description;

        if ($about->save()) {
            Alert::success('Update Berhasil', 'Sukses Update Data');
            return redirect()->route('about.index');
        }

        Alert::error('Update Gagal', 'Gagal Update Data');
    }

    public function show($id)
    {
        $data['about'] = About::findOrFail($id)->first();
        return view('about.show')->with($data);
    }

    public function destroy($id)
    {
        //
    }
}
