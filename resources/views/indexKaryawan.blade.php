@extends('master')

@section('title','Data Karyawan')

@section('konten')


	<h3>Data Karyawan</h3>



	<br/>
    <br>
    <p>Cari Nama Karyawan: </p>
	<form action="/karyawan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Karyawan.." value="{{ old('cari') }}"
        value="{{ old("cari", isset($cari) ? $cari : '') }}"> <br>
		<input class="btn btn-success " type="submit" value="CARI">

	</form>
	<br/>

	<table class=" table table-striped table-hover">
		<tr>
            <th>Kode Karyawan</th>
			<th>Nama Karyawan</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>

		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->karyawan_kodepegawai }}</td>

			<td>{{ $p->karyawan_namalengkap }}</td>
			<td>{{ $p->karyawan_divisi}}</td>
            <td>{{ $p->karyawan_departemen}}</td>
		    {{-- <td>
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
                    @endif --}}


                  {{-- <input type="checkbox" class="form-check-input " id="tersedia" name="tersedia" value={{ $p->sepatu_tersedia }} checked>
                </label> --}}

			<td>
                {{-- <a href="/sepatu/viewSepatu/{{ $p->sepatu_kodesepatu }}" class="btn btn-success">View</a> --}}

				<a href="/karyawan/hapus/{{ $p->karyawan_kodepegawai }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/karyawan/editKaryawan/{{ $p->karyawan_kodepegawai  }}" class="btn btn-warning">Edit</a>
			</td>


		</tr>
		@endforeach
	</table>
    <a href="/karyawan/tambahKaryawan" class="btn btn-primary"> + Tambah Karyawan</a>
    @endsection
