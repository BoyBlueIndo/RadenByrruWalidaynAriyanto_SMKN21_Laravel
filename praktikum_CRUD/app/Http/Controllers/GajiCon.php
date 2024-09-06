<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiCon extends Controller
{
    public function index(){

        $gaji = DB::table('tbgaji') -> get();

        return view('gaji', ['gaji' => $gaji]);
    }

    public function tambah()
    {
        return view('tambahgaji');
    }

    public function store(Request $request)
    {
        // insert data ke table tbgaji
        DB::table('tbgaji')->insert([
            'pegawai_id_gaji' => $request->pegawai_id_gaji,
            'jumlah_gaji' => $request->jumlah_gaji,
            'jumlah_lembur' => $request->jumlah_lembur,
            'potongan' => $request->potongan,
            'gaji_diterima' => $request->gaji_diterima,
            'tanggal_gaji' => $request->tanggal_gaji
        ]);
        // alihkan halaman ke route gaji
        return redirect('/gaji');
    }

    //
    //
    //

    public function edit($id)
    {
        // mengambil data golongan berdasarkan id yang dipilih
        $gaji = DB::table('tbgaji')->where('gaji_id',$id)->get();
        // passing data golongan yang didapat ke view edit.blade.php
        return view('editgaji',['gaji' => $gaji]);
    }

    public function storeupdate(Request $request)
    {
        // update data golongan
        DB::table('tbgaji')->where('gaji_id',$request->id)->update([
            // 'pegawai_id_gaji' => $request->p_id_gaji,
            'jumlah_gaji' => $request->j_gaji,
            'jumlah_lembur' => $request->j_lembur,
            'potongan' => $request->potong,
            'gaji_diterima' => $request->di_gaji,
            'tanggal_gaji' => $request->t_gaji
        ]);
        // alihkan halaman ke halaman golongan
        return redirect('/gaji');
    }

    //
    //
    //

    public function hapus($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        DB::table('tbgaji')->where('gaji_id',$id)->delete();
        // passing data pegawai yang didapat ke view edit.blade.php
        return redirect('/gaji');
    }
}
