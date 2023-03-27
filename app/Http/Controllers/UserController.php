<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function aduan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'aduan' => 'required'
        ]);

        $aduan = new Aduan;
        $aduan->nama = $request->nama;
        $aduan->aduan = $request->aduan;
        $aduan->status = 0;
        $aduan->save();

        return redirect()->route('user')->with('success','berhasil kirim aduan');
    }  
}
