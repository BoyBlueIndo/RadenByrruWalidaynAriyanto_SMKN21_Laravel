<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LemburCon extends Controller
{
    public function index(){

        $lembur = DB::table('tblembur') -> get();

        return view('lembur', ['lembur' => $lembur]);
    }


    public function tambah()
    {
        return view('tambahlembur');
    }

    public function store(Request $request)
    {
        // insert data ke table tblembur
        DB::table('tblembur')->insert([
            'pegawai_id_lembur' => $request->pegawai_id_lembur,
            'bulan_lembur' => $request->bulan_lembur,
            'jumlah_lembur' => $request->jumlah_lembur
        ]);
        // alihkan halaman ke route gaji
        return redirect('/lembur');
    }

    //
    //
    //

    public function edit($id)
    {
        // mengambil data lembur berdasarkan id yang dipilih
        $lembur = DB::table('tblembur')->where('lembur_id',$id)->get();
        // passing data lembur yang didapat ke view edit.blade.php
        return view('editlembur',['lembur' => $lembur]);
    }

    public function storeupdate(Request $request)
    {
        // update data lembur
        DB::table('tblembur')->where('lembur_id',$request->id)->update([
            // 'pegawai_id_lembur' => $request->pegawai_id_lembur,
            'bulan_lembur' => $request->b_lembur,
            'jumlah_lembur' => $request->j_lembur
        ]);
        // alihkan halaman ke halaman lembur
        return redirect('/lembur');
    }

    //
    //
    //

    public function hapus($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        DB::table('tblembur')->where('lembur_id',$id)->delete();
        // passing data pegawai yang didapat ke view edit.blade.php
        return redirect('/lembur');
    }
}
