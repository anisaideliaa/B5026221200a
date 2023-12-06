<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepatuController extends Controller
{
    public function indexSepatu()
	{
    	// mengambil data dari table sepatu
		$sepatu = DB::table('sepatu')->get();

    	// mengirim data pegawai ke view index
		return view('indexSepatu',['sepatu' => $sepatu]);

	}

    public function tambahSepatu()
	{

		// memanggil view tambah
		return view('tambahSepatu');

	}

    // method untuk insert data ke table sepatu
	public function store(Request $request)
	{
		// insert data ke table sepatu
		DB::table('sepatu')->insert([
			'sepatu_kodesepatu' => $request->kodesepatu,
			'sepatu_merksepatu' => $request->merksepatu,
			'sepatu_stocksepatu' => $request->stocksepatu,
			'sepatu_tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman sepatu
		return redirect('/sepatu');
	}

    // method untuk hapus data sepatu
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('sepatu')->where('sepatu_kodesepatu',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/sepatu');
	}
    // method untuk edit data sepatu
	public function editSepatu($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepatu = DB::table('sepatu')->where('sepatu_kodesepatu',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editSepatu',['sepatu' => $sepatu]);

	}
    public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepatu')->where('sepatu_kodesepatu',$request->kodesepatu)->update([
			'sepatu_merksepatu' => $request->merksepatu,
			'sepatu_stocksepatu' => $request->stocksepatu,
			'sepatu_tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepatu = DB::table('sepatu')
		->where('sepatu_merksepatu','like',"%".$cari."%")
		->get();

    		// mengirim data pegawai ke view index
		return view('indexSepatu',['sepatu' => $sepatu,'cari'=> $cari]);

	}
}
