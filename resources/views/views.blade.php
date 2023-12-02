@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    {{-- <a href="/pegawai"> Kembali</a> --}}

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

            <div class="container">
                <div class="row justify-content-center">
                    <div class="card-group">
                        <div class="card" style="width:400px">
                            <img src="https://i.pinimg.com/564x/0f/14/95/0f14957ed21689419a4e960be027708c.jpg"
                                alt="jpg">
                            <!-- Content for the first card -->
                        </div>

                        <div class="card body" style="width:400px">
                            <div class="card-body">

                                <div class="form-group row align-items-center">
                                    <label for="nama" class="col-form-label col-sm-4 text-right">Nama :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_nama }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="jabatan" class="col-form-label col-sm-4 text-right">Jabatan :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_jabatan }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="umur" class="col-form-label col-sm-4 text-right">Umur :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_umur }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="alamat" class="col-form-label col-sm-4 text-right">Alamat :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_alamat }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <div class="col-sm-4 offset-sm-4">
                                        <a href="/pegawai" class="btn btn-success">Oke</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </form>
    @endforeach
@endsection
