<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        alert()->success('Sukses', 'Best Match');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yabeee!!!!!', 'success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        alert()->success('Sukes', 'Break Match');
        return redirect()->route('mahasiswa');
    }
}
