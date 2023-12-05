@extends('masternilai')
@section('title', 'Tambah Data')

@section('konten')
	<h3>Tambah Data</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/storenilai" method="post">
		{{ csrf_field() }}
        <div class="form-group row align-items-center">
            <label for="NRP" class="col-form-label col-sm-4 text-right">NRP:</label>
            <div class="col-sm-4">
                <input type="char" class="form-control" id="NRP" name="NRP" placeholder = "Masukan NRP">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="nilaiangka" class="col-form-label col-sm-4 text-right">Nilai Angka:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka" placeholder = "Masukan Nilai">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="SKS" class="col-form-label col-sm-4 text-right">SKS:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="SKS" name="SKS" placeholder = "Masukan jumlah SKS ">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Oke</button>
            </div>
        </div>
<br>
<br>

	</form>

@endsection
