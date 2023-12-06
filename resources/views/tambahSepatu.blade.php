@extends('master')

@section('title','Data Sepatu')

@section('konten')

	<h3>Data Sepatu</h3>

	<a href="/sepatu" class="btn btn-primary">Kembali</a>

	<br/>
	<br/>
	<br/>
    <form action="/sepatu/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row align-items-center">
            <label for="kodesepatu" class="col-form-label col-sm-4 text-right">Kode Sepatu:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Kode Sepatu" id="kodesepatu" name="kodesepatu">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="merksepatu" class="col-form-label col-sm-4 text-right">Merk Sepatu:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Merk Sepatu" id="merksepatu" name="merksepatu">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="stocksepatu" class="col-form-label col-sm-4 text-right">Stock Sepatu:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan Stock Sepatu " id="stocksepatu" name="stocksepatu">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="tersedia" class="col-form-label col-sm-4 text-right">Ketersedian Sepatu:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Ketersedian Sepatu" id="tersedia" name="tersedia">
            </div>
        </div>


        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Oke</button>
            </div>
        </div>
    </form>
@endsection
