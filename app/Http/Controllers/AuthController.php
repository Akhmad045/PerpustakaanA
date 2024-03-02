<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('pages.samples.login');
    }
    public function ceklogin(Request $request){
        $cek = new Admin();
        $cek = $cek->where('username', $request->input('username'))->where('password', $request->input('password'));
        if ($cek->exists()) {
            session([
                'data'=> $cek->first()
            ]);
            return redirect('/');
            // (return response()->json(session('datapetugas')->id_petugas))
        }
    }
}
