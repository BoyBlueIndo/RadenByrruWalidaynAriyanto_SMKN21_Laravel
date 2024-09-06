<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganConController extends Controller
{
    public function index(){

        $golongan = DB::table('tbgolongan') -> get();

        return view('golongan', ['golongan' => $golongan]);
    }

    public function tambah()
    {
        return view('tambahgolongan');
    }

    public function store(Request $request)
    {
        // insert data ke table tbgolongan
        DB::table('tbgolongan')->insert([
            'golongan_nama' => $request->nama,
            'gaji_pokok' => $request->gaji,
            'tunjangan_keluarga' => $request->t_keluarga,
            'tunjangan_transport' => $request->t_transport,
            'tunjangan_makan' => $request->t_makan
        ]);
        // alihkan halaman ke route golongan
        return redirect('/golongan');
    }

    //
    //
    //

    public function edit($id)
    {
        // mengambil data golongan berdasarkan id yang dipilih
        $golongan = DB::table('tbgolongan')->where('golongan_id',$id)->get();
        // passing data golongan yang didapat ke view edit.blade.php
        return view('editgolongan',['golongan' => $golongan]);
    }

    public function storeupdate(Request $request)
    {
        // update data golongan
        DB::table('tbgolongan')->where('golongan_id',$request->id)->update([
            'golongan_nama' => $request->nama,
            'gaji_pokok' => $request->gaji,
            'tunjangan_keluarga' => $request->t_keluarga,
            'tunjangan_transport' => $request->t_transport,
            'tunjangan_makan' => $request->t_makan
        ]);
        // alihkan halaman ke halaman golongan
        return redirect('/golongan');
    }

    //
    //
    //

    public function hapus($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        DB::table('tbgolongan')->where('golongan_id',$id)->delete();
        // passing data pegawai yang didapat ke view edit.blade.php
        return redirect('/golongan');
    }
}
