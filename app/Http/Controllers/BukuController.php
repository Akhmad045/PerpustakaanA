<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function tambah(){
        return view('pages.buku.tambah');
    }
    public function tambah_buku(Request $request){
        $valid = $request->validate([
            'Judul'=> 'required|unique:buku|max:250',
            'Penulis'=> 'required|max:250',
            'Penerbit'=> 'required|max:250',
            'TahunTerbit'=> 'required|max:4',
            'Stok'=> 'required',
        ]);
        $ft = '';
        if($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $ft = $request->judul.'-'.now()->timestamp.'.'.$extension;
            $request->file('foto')->storeAs('cover', $ft);
        }
        $request['cover'] = $ft;
        $b = new Buku();
        $b->create([
            'Judul'=> $request->Judul,
            'Penulis'=> $request->Penulis,
            'Penerbit'=> $request->Penerbit,
            'TahunTerbit'=> $request->TahunTerbit,
            'Stok'=> $request->Stok,
            'foto' => $request->foto
        ]);
        return back()->with('status','Buku berhasil ditambahkan');
    }
}
