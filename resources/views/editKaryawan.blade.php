@extends('master')

@section('title', 'Data Karyawan')

@section('konten')
{{--
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
    <h3>Edit Karyawan</h3>

    {{-- <a href="/pegawai"> Kembali</a> --}}

    <br />
    <br />

    @foreach ($karyawan as $p)
        <form action="/karyawan/update" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->karyawan }}"> <br /> --}}

            <div class="form-group row align-items-center">
                <label for="kodepegawai" class="col-form-label col-sm-4 text-right">Kode Karyawan:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Masukkan Kode Karyawan" id="kodepegawai" name="kodepegawai"
                    value="{{ $p->karyawan_kodepegawai }}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="namalengkap" class="col-form-label col-sm-4 text-right">Nama Lengkap:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="namalengkap" name="namalengkap"
                    value="{{ $p->karyawan_namalengkap}}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="divisi" class="col-form-label col-sm-4 text-right">Divisi:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Masukkan Divisi " id="divisi" name="divisi"
                    value="{{ $p->karyawan_divisi}}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="departemen" class="col-form-label col-sm-4 text-right">Departemen:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Masukkan Departemen" id="departemen" name="departemen"
                    value="{{ $p->karyawan_departemen}}">
                </div>
            </div>


            <div class="form-group row align-items-center">
                <div class="col-sm-4 offset-sm-4">
                    <button type="submit" class="btn btn-primary" value="Simpan Data">Oke</button>
                </div>
            </div>
        </form>
        
    @endforeach
@endsection
