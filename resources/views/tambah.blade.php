@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	{{-- <a href="/pegawai"> Kembali</a> --}}

	<br/>
	<br/>
	<br/>


	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row align-items-center">
            <label for="nama" class="col-form-label col-sm-4 text-right">Nama</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="Masukkan Nama" id="first_name" name="nama">
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="jabatan" class="=col-form-label col-sm-4 text-right">Jabatan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="Masukkan Jabatan" id="first_name" name="jabatan">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="umur" class="col-form-label col-sm-4 text-right">Umur</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" placeholder="Masukkan Umur" id="first_name" name="umur">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="alamat" class="col-form-label col-sm-4 text-right">Alamat</label>
            <div class="col-sm-4">
            <textarea class="form-control" placeholder="Masukkan Alamat" id="first_name" name="alamat"></textarea>
            </div>

        </div>

        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
                <a href="/pegawai" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
	</form>

    <br/>
@endsection


