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
            'no_telp' => 'required',
            'nik' => 'required|integer|digits:16',
            'aduan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lokasi' => 'required',
        ]);

        $input = ([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'nik' => $request->nik,
            'aduan' => $request->aduan,
            'image' => $request->image,
            'lokasi' => $request->lokasi,
            'status' => 0
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/aduan';
            $profileImage = date('Y-m-d_H:i:s') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Aduan::create($input);

        return redirect()->route('user')->with('success','berhasil kirim aduan');
    }  
}
