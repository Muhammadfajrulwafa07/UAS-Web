<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;

class MakulController extends Controller
{
    public function index(){
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create(){
        return view('makul.create');
    }

    public function store(Request $request){
        Makul::create($request->all());
        alert()->success('Sukses', 'Best Match');
        return redirect()->route('makul');
    }

    public function edit($id){
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id){
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yabeee!!!!!', 'success');
        return redirect()->route('makul');
    }

    public function destroy($id){
        $makul = Makul::find($id);
        $makul->delete();
        alert()->success('Sukes', 'Break Match');
        return redirect()->route('makul');
    }
        
}
