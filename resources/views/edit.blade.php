@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	{{-- <a href="/pegawai"> Kembali</a> --}}

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group row align-items-center">
            <label for="nama" class="col-form-label col-sm-4 text-right">Nama</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="jabatan" class="col-form-label col-sm-4 text-right">Jabatan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="umur" class="col-form-label col-sm-4 text-right">Umur</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="alamat" class="col-form-label col-sm-4 text-right">Alamat</label>
            <div class="col-sm-4">
                <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}"</textarea>
            </div>
        </div>

        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
                <a href="/pegawai" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <br>

	</form>
	@endforeach
@endsection
