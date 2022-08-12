@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <h5 class="fw-bold">Tambah Data Penduduk</h5>
                        </div>
                    </div>
                </div>
                <form action="{{ route('penduduk.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="number" class="form-control" name="nik" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="ttl">TTL</label>
                                    <input type="text" class="form-control" name="ttl" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" name="agama" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
