@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <h5 class="fw-bold">Tambah Data Hunian</h5>
                        </div>
                    </div>
                </div>
                <form action="{{ route('hunian.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nik">NIK Kepala Keluarga</label>
                                    <input type="number" class="form-control" name="nik_kepala_keluarga" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="no_kk">NO KK</label>
                                    <input type="text" class="form-control" name="no_kk" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="luas_tanah">Luas Tanah</label>
                                    <input type="text" class="form-control" name="luas_tanah" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="luas_bangunan">Luas Bangunan</label>
                                    <input type="text" class="form-control" name="luas_bangunan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('hunian.index') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
