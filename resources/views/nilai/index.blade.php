@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Data Nilai
                <a href="{{ route('tambah.nilai') }}"class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>NO</th>
                                    <th>NPM</th>
                                    <th>NAMA</th>
                                    <th>NAMA MAKUL</th>
                                    <th>SKS</th>
                                    <th>NILAI</th>
                                    <th>AKSI</th>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($nilai as $ni)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $ni->mahasiswa->npm }}</td>
                                        <td>{{ $ni->mahasiswa->user->name }}</td>
                                        <td>{{ $ni->makul->nama_makul}}</td>
                                        <td>{{ $ni->makul->sks}}</td>
                                        <td>{{ $ni->nilai}}</td>
                                        <td>
                                            <a href="{{ route('edit.nilai', $ni->id) }}"class="btn btn-md btn-warning">Edit</a>
                                            <a href="{{ route('hapus.nilai', $ni->id) }}"class="btn btn-md btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection
