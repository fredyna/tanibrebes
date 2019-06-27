<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tani;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tani_id = $request->get('tani_id');
        if (!empty($tani_id)) {
            $data['products'] = Product::where('tani_id', $tani_id)->get();
            $data['tani_id']  = $tani_id;
        } else
            $data['products'] = Product::all();
        $data['tanis']  = Tani::all();
        return view('product.index')->with($data);
    }

    public function create()
    {
        $data['tanis'] = Tani::all();
        return view('product.create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tani_id'   => 'required',
            'nama'      => 'required|min:3:max:100',
            'kapasitas_produksi' => 'required',
            'harga_agen' => 'required',
            'harga_jual' => 'required',
            'foto'      => 'required|image'
        ]);

        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('img/products'), $imgName);

        $data = [
            'tani_id'   => $request->tani_id,
            'nama'      => $request->nama,
            'kapasitas_produksi' => $request->kapasitas_produksi,
            'harga_agen' => $request->harga_agen,
            'harga_jual' => $request->harga_jual,
            'panjang'   => $request->panjang,
            'lebar'     => $request->lebar,
            'tinggi'    => $request->tinggi,
            'foto'      => $imgName
        ];

        $product = Product::create($data);
        if ($product) {
            Alert::success('Sukses Tambah', 'Sukses Tambah Data');
            return redirect()->route('product.index');
        }

        Alert::success('Gagal Tambah', 'Gagal Tambah Data');
        return redirect()->route('product.create');
    }

    public function show($id)
    {
        $data['product'] = Product::findOrFail($id);
        return view('product.show')->with($data);
    }

    public function edit($id)
    {
        $data['tanis']  = Tani::all();
        $data['product'] = Product::findOrFail($id);
        dd($data);
        return view('product.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->delete()) {
            Alert::success('Hapus Sukses', 'Sukses Hapus Data');
            return redirect()->route('product.index');
        }

        Alert::success('Gagal Hapus', 'Gagal Hapus Data');
        return redirect()->route('product.index');
    }
}
