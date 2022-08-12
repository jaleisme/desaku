@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10 d-flex align-items-center">
                            <h5 class="fw-bold">Hunian</h5>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="{{ route('hunian.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK Kepala Keluarga</th>
                                        <th>NO KK</th>
                                        <th>Lokasi</th>
                                        <th>Luas Tanah</th>
                                        <th>Luas Bangunan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hunian as $h)
                                    <tr>
                                        <td>{{ $h->id }}</td>
                                        <td>{{ $h->nik_kepala_keluarga }}</td>
                                        <td>{{ $h->no_kk }}</td>
                                        <td>{{ $h->lokasi }}</td>
                                        <td>{{ $h->luas_tanah }}</td>
                                        <td>{{ $h->luas_bangunan }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('hunian.edit', $h->id) }}" class="btn btn-warning" style="margin-right: 16px !important;">Edit</a>
                                            <form method="POST" action="{{ route('hunian.destroy', $h->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
