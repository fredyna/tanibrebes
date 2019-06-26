<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tani;
use App\About;
use RealRashid\SweetAlert\Facades\Alert;

class TaniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['about'] = About::get()->first();
        $data['tanis'] = Tani::all();
        return view('tani.index')->with($data);
    }

    public function create()
    {
        return view('tani.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_organisasi'  => 'required',
            'nama'              => 'required',
            'ketua'             => 'required',
            'address'           => 'required',
            'nomor_hp'          => 'required',
            'jumlah_anggota'    => 'required',
            'kegiatan_rutin'    => 'required',
            'logo'              => 'required',
        ]);

        $uploadedFile = $request->file('logo');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('img/tani'), $imgName);

        $data = [
            'jenis_organisasi'  => $request->jenis_organisasi,
            'nama'              => $request->nama,
            'ketua'             => $request->ketua,
            'address'           => $request->address,
            'nomor_hp'          => $request->nomor_hp,
            'jumlah_anggota'    => $request->jumlah_anggota,
            'kegiatan_rutin'    => $request->kegiatan_rutin,
            'logo'              => $imgName,
        ];

        $tani = Tani::create($data);
        if ($tani) {
            Alert::success('Update Berhasil', 'Sukses Update Data');
            return redirect()->route('tani.index');
        }

        Alert::error('Update Gagal', 'Sukses Update Data');
        return redirect()->route('tani.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
