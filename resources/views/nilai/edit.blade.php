@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                       <form action="{{ route('update.nilai', $nilai->id) }}" method="POST">
                           @csrf
                           <div class="form-group">
                               <div class="form-row">
                                   <div class="col">
                                       <label>Nama Mahasiswa</label>
                                       <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                           <option value=""disable selected>-- Pilih Nama --</option>
                                           @foreach($mahasiswa as $m)
                                                <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }} >{{ $m->user->name }}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                    <div class="col">
                                       <label>Nama Mata Kuliah</label>
                                       <select name="makul_id" id="makul_id" class="form-control">
                                            <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                            @foreach($makul as $mt)
                                                <option value="{{ $mt->id }}" {{ $nilai->makul_id == $mt->id ? 'selected' : '' }} >{{ $mt->nama_makul }}</option>
                                            @endforeach
                                       </select>
                                   </div>
                                   <div class="col">
                                       <label>Nilai</label>
                                       <input type="number" value="{{ is_null($nilai) ? '' : $nilai->nilai }}" name="nilai" class="form-control" placeholder="Masukkan Nilai">
                                   </div>
                               </div>
                           </div>
                           
                           <div class="form-group float-right">
                               <div class="form-row">
                                   <div class="col">
                                       <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                       <a href="{{ route('nilai') }}" class="btn btn-sm btn-danger">BATAL</a>
                                   </div>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection
