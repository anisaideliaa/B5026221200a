<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table sepatu
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data pegawai ke view index
		return view('indexKaryawan',['karyawan' => $karyawan]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('tambahKaryawan');

	}

    // method untuk insert data ke table sepatu
	public function store(Request $request)
{
    // Validasi apakah kodepegawai sudah ada di tabel
    $existingKaryawan = DB::table('karyawan')->where('karyawan_kodepegawai', $request->kodepegawai)->first();

    if ($existingKaryawan) {
        // Kodepegawai sudah ada, berikan respon atau lakukan tindakan yang sesuai
        return redirect()->back()->with('error', 'Kode Pegawai sudah ada dalam database.');
    }

    // Kodepegawai belum ada, lanjutkan dengan menyimpan data
    DB::table('karyawan')->insert([
        'karyawan_kodepegawai' => $request->kodepegawai,
        'karyawan_namalengkap' => $request->namalengkap,
        'karyawan_divisi' => $request->divisi,
        'karyawan_departemen' => $request->departemen
    ]);
		// alihkan halaman ke halaman sepatu
		return redirect('/karyawan');
	}

    // method untuk hapus data sepatu
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('karyawan')->where('karyawan_kodepegawai',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/karyawan');
	}
    // method untuk edit data sepatu
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawan = DB::table('karyawan')->where('karyawan_kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editKaryawan',['karyawan' => $karyawan]);

	}
    public function update(Request $request)
	{
		// update data pegawai
		DB::table('karyawan')->where('karyawan_kodepegawai',$request->kodepegawai)->update([
			'karyawan_namalengkap' => $request->namalengkap,
			'karyawan_divisi' => $request->divisi,
			'karyawan_departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepatu = DB::table('karyawan')
		->where('karyawan_namalengkap','like',"%".$cari."%")
		->get();

    		// mengirim data pegawai ke view index
		return view('indexKaryawan',['karyawan' => $karyawan,'cari'=> $cari]);

	}
    // public function views($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$sepatu = DB::table('sepatu')->where('sepatu_kodesepatu',$id)->get();
	// 	// passing data pegawai yang didapat ke view view.blade.php
	// 	return view('viewSepatu',['sepatu' => $sepatu]);

	// }
}
