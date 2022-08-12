@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <h5 class="fw-bold">Edit Data Fasilitas</h5>
                        </div>
                    </div>
                </div>
                <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" required value="{{ $fasilitas->nama }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" required value="{{ $fasilitas->alamat }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
