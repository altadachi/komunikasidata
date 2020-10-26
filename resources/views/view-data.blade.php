@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/home"><span class="btn btn-success ">Kembali ke Home</span></a>
                    <a href="/add-data"><span class="btn btn-primary ">Tambah Data</span></a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Selamat Datang ') }}

                    <table class="table table-bordered table-hover table-striped">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i =>$ket)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{ $ket->judul}}</td>
                                <td>{{ $ket->kategori}}</td>
                                <td>{{ $ket->keterangan}}</td>
                                <td><img src="{{ asset('/images/' . $ket->gambar) }}" width="80px" height="80px" />
                                </td>
                                <td>
                                    <a href="/edit-data/{{ $ket->id }}"><span class="btn btn-warning ">Edit</span></a>
                                    |
                                    <a href="/view-data/hapus/{{ $ket->id }}"><span
                                            class="btn btn-danger ">Hapus</span></a>
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
@endsection