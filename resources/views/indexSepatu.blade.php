@extends('master')

@section('title','Data Pegawai')

@section('konten')


	<h3>Data Sepatu</h3>

	<a href="/sepatu/tambahSepatu" class="btn btn-primary"> + Tambah Sepatu Baru</a>

	<br/>
    <br>
    <p>Cari Merk Sepatu: </p>
	<form action="/sepatu/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Sepatu.." value="{{ old('cari') }}"
        value="{{ old("cari", isset($cari) ? $cari : '') }}"> <br>
		<input class="btn btn-success " type="submit" value="CARI">

	</form>
	<br/>

	<table class=" table table-striped table-hover">
		<tr>
			<th>Kode Sepatu</th>
			<th>Merk Sepatu</th>
			<th>Stock Sepatu</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepatu as $p)
		<tr>
			<td>{{ $p->sepatu_kodesepatu }}</td>
			<td>{{ $p->sepatu_merksepatu }}</td>
			<td>{{ $p->sepatu_stocksepatu }}</td>
		    <td>
                    @if ($p->sepatu_tersedia == 'y')
                    <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="" checked disabled>
                        </label>
                      </div>
                    @else
                    <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="" disabled>
                        </label>
                      </div>
                    @endif


                  {{-- <input type="checkbox" class="form-check-input " id="tersedia" name="tersedia" value={{ $p->sepatu_tersedia }} checked>
                </label> --}}

			<td>

				<a href="/sepatu/hapus/{{ $p->sepatu_kodesepatu }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/sepatu/editSepatu/{{ $p->sepatu_kodesepatu }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $pegawai->links() }} --}}
    @endsection
