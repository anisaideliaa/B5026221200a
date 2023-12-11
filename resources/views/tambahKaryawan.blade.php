@extends('master')

@section('title','Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-primary">Kembali</a>

	<br/>
	<br/>
	<br/>
    <form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

        <div class="form-group row align-items-center">
            <label for="kodepegawai" class="col-form-label col-sm-4 text-right">Kode Karyawan:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Kode Karyawan" id="kodepegawai" name="kodepegawai">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="namalengkap" class="col-form-label col-sm-4 text-right">Nama Lengkap:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="namalengkap" name="namalengkap">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="divisi" class="col-form-label col-sm-4 text-right">Divisi:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Divisi " id="divisi" name="divisi">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="departemen" class="col-form-label col-sm-4 text-right">Departemen:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Departemen" id="departemen" name="departemen">
            </div>
        </div>


        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <button type="submit" class="btn btn-primary" value="Simpan Data">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
