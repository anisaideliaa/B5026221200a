<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function index1()
	{
    	// mengambil data dari table keranjang belanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('index1',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->id,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	// method untuk edit data keranjangbelanja
	public function edit($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjangbelanja = DB::table('keranjangbelanja')->where('ID',$id)->get();
		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('edit',['keranjangbelanja' => $keranjangbelanja]);

	}

	// update data keranjangbelanja
	public function update(Request $request)
	{
		// update data keranjangbelanja
		DB::table('keranjangbelanja')->where('ID',$request->id)->update([
			'ID' => $request->id,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

}
