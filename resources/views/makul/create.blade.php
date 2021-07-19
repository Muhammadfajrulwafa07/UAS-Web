@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                       <form action="{{ route('simpan.makul') }}" method="POST">
                           @csrf
                           <div class="form-group">
                               <div class="form-row">
                                   <div class="col">
                                       <label>Kode Makul</label>
                                       <input type="text" name="kd_makul" class="form-control" placeholder="Tambahkan code makul">
                                   </div>
                                   <div class="col">
                                       <label>Nama Kuliah</label>
                                       <input type="text" name="nama_makul" class="form-control" placeholder="Tambahkan Nama makul">
                                   </div>
                                   <div class="col">
                                       <label>SKS</label>
                                       <input type="number" name="sks" class="form-control" placeholder="Tambahkan code sks">
                                   </div>
                               </div>
                           </div>
                           <div class="form-group float-right">
                               <div class="form-row">
                                   <div class="col">
                                       <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                       <a href="{{ route('makul') }}" class="btn btn-sm btn-danger">BATAL</a>
                                   </div>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
             </div>
        </div>
@endsection
