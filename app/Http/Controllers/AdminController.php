<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;

class AdminController extends Controller
{
    public function index()
    {
        $aduans = Aduan::orderBy('created_at', 'DESC')->get();

        return view('admin', compact('aduans'));
    }

    public function show($id)
    {
        $aduans = Aduan::find($id);

        return view('popup-admin', compact('aduans'));   
    }

    public function edit(Request $request, $id)
    {
        $aduans = Aduan::find($id);
        if($aduans->status == 0){
            $aduans->status = 1;
        }else{
            $aduans->status = 2;
        }
        $aduans->save();

        return redirect()->route('admin')->with('success','berhasil edit');
    }

    public function cetak($id)
    {
        $data['aduan'] = Aduan::find($id);
        $pdf = \PDF::loadView('cetak-pdf', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('cetak.pdf');
    }
}
