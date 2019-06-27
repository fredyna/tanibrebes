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
            'logo'              => 'required|image',
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
            Alert::success('Tambah Berhasil', 'Sukses Tambah Data');
            return redirect()->route('tani.index');
        }

        Alert::error('Tambah Gagal', 'Sukses Tambah Data');
        return redirect()->route('tani.create');
    }

    public function show($id)
    {
        $data['tani'] = Tani::findOrFail($id);
        return view('tani.show')->with($data);
    }

    public function edit($id)
    {
        $data['tani'] = Tani::findOrFail($id);
        return view('tani.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_organisasi'  => 'required',
            'nama'              => 'required',
            'ketua'             => 'required',
            'address'           => 'required',
            'nomor_hp'          => 'required',
            'jumlah_anggota'    => 'required',
            'kegiatan_rutin'    => 'required',
            'logo'              => 'nullable|image',
        ]);

        $tani = Tani::find($id);
        $tani->jenis_organisasi = $request->jenis_organisasi;
        $tani->nama             = $request->nama;
        $tani->ketua            = $request->ketua;
        $tani->address          = $request->address;
        $tani->nomor_hp         = $request->nomor_hp;
        $tani->jumlah_anggota   = $request->jumlah_anggota;
        $tani->kegiatan_rutin   = $request->kegiatan_rutin;

        if (!empty($request->file('logo'))) {
            $uploadedFile = $request->file('logo');
            $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('img/tani'), $imgName);

            $tani->logo   = $imgName;
        }

        if ($tani->save()) {
            Alert::success('Update Berhasil', 'Sukses Update Data');
            return redirect()->route('tani.index');
        }

        Alert::error('Update Gagal', 'Sukses Update Data');
        return redirect()->route('tani.edit', $id);
    }

    public function destroy($id)
    {
        $tani = Tani::findOrFail($id);
        if ($tani->delete()) {
            Alert::success('Hapus Berhasil', 'Sukses Hapus Data');
        } else {
            Alert::error('Hapus Gagal', 'Sukses Hapus Data');
        }

        return redirect()->route('tani.index');
    }
}
