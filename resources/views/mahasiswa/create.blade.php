@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                    <div class="card-body">
                       <form action="{{ route('simpan.mahasiswa') }}" method="POST">
                           @csrf
                           <div class="form-group">
                               <div class="form-row">
                                   <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                   <option value=""disable selected>-- Pilih User --</option>
                                        @foreach($user as $u)
                                            <option value="{{ $u->id }}" >{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                   </div>
                                   <div class="col">
                                       <label>NPM</label>
                                       <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM">
                                   </div>
                                   <div class="col">
                                       <label>Tempat Lahir</label>
                                       <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="form-row">
                                   <div class="col">
                                       <label>Tanggal Lahir</label>
                                       <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal">
                                   </div>
                                   <div class="col">
                                       <label>Jenis Kelamin</label>
                                       <select name="gender" id="gender" class="form-control">
                                            <option value="" disabled>-- Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                       </select>
                                   </div>
                                   <div class="col">
                                       <label>Telepon</label>
                                       <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Nomor Telepon">
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="form-row">
                                   <div class="col">
                                       <label>Alamat</label>
                                       <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none"></textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group float-right">
                               <div class="form-row">
                                   <div class="col">
                                       <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                       <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-danger">BATAL</a>
                                   </div>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
