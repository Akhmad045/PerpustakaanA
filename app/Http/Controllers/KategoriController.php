<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
        public function index(){
            $kategori = KategoriBuku::all();
            return view('pages.kategori.index', ['kt'=> $kategori]);
        }

        public function tambah(){
            return view('pages.kategori.tambah');
        }

        public function tambah_kategori(Request $request){
            $valid = $request->validate([
                'NamaKategori'=> 'required|unique:kategori_buku|max:250',
            ]);
            $kategori = new KategoriBuku();
            $kategori->create([
                'NamaKategori'=> $request->NamaKategori,
            ]);
            return redirect('kategori')->with('status','Kategori buku berhasil ditambahan');
        }

        public function edit($id){
            $kategori = KategoriBuku::select('*')->where('KategoriID', $id)->get();
            return view('pages.kategori.edit', ['data'=> $kategori]);
        }
}
