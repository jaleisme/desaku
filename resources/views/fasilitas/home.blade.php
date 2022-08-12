@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10 d-flex align-items-center">
                            <h5 class="fw-bold">Fasilitas</h5>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="{{ route('fasilitas.create') }}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>Nama Fasilitas</th>
                                        <th>Lokasi</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas as $f)
                                    <tr>
                                        <td>{{ $f->id }}</td>
                                        <td>{{ $f->nama }}</td>
                                        <td>{{ $f->alamat }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('fasilitas.edit', $f->id) }}" class="btn btn-warning" style="margin-right: 16px !important;">Edit</a>
                                            <form method="POST" action="{{ route('fasilitas.destroy', $f->id) }}">
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
