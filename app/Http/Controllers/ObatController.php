<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index(){
        $obats = Obat::all();
        return view('obat.index', compact('obats'));
    }

    public function create(Request $request)
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'tipe' => 'required',
            'jumlah' => 'required',
            'harga_satuan' => 'required',
        ]);
        Obat::create($request->all());
        return redirect()->route('index.obat')
            ->with('success', 'Obat created successfully.');
    }

    public function edit(Request $request, $id){
        $obat = Obat::find($id);
        return view('obat.update', compact('obat'));
    }

    public function update(Request $request){
        $obat = Obat::find($request->id);
        $obat->name = $request->name;
        $obat->deskripsi = $request->deskripsi;
        $obat->tipe = $request->tipe;
        $obat->jumlah = $request->jumlah;
        $obat->harga_satuan = $request->harga_satuan;
        $obat->save(); 
        return redirect()->route('index.obat')
        ->with('success', 'Obat updated successfully.');
    }

    public function delete(Request $request)
    {
        $obat = Obat::find($request->id);
        $obat->delete();
        return redirect()->route('index.obat')
            ->with('success', 'Obat deleted successfully');
    }
}
