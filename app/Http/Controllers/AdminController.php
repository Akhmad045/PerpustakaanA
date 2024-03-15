<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\Userr;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        // $buku = Buku::count();
        // $kategori = KategoriBuku::count();
        // $user = Userr::count();
        return view('index');
        // ,['buku_hitung' => $buku, 'kategori_hitung' => $kategori, 'user_hitung' => $user]
    }

    public function register(){
        return view('pages.sign-up');
    }
    public function registercek(Request $request){
        $m = new Userr();
        $cek = $request->validate([
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'email'=>'required',
            'namalengkap'=>'required|min:4',
        ]);
        $m->create($request->all());
        return back()->with('pesan','Selamat, Anda berhasil daftar');
    }
    public function login(){
        // buat objek
        return view('pages.sign-in');
    }
    public function logincek(Request $request){
         $raden = new Userr();
         // cek username dan password exists (ada) di tabel user
         if($raden->where('email',$request->input('email'))->where('password',$request->input('password'))->exists()){
            session([
                'email'=>$request->input('email'),
                'password'=>($request->input('password'))
            ]);
            return redirect('dashboard');
         }
         return back()->with('pesan','email atau password salah');
         
    }
}
