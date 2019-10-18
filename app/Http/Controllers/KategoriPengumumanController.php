<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        
        $listKategoriPengumuman=KategoriPengumuman::all(); 

        return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));

    }

    public function show($id) {
        
        $listKategoriPengumuman=KategoriPengumuman::find($id);

        
        if(empty($listKategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        return view ('kategori_pengumuman.show', compact('listKategoriPengumuman'));
        
    }

    public function create(){

        return view ('kategori_pengumuman.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriPengumuman::create($input);
        
        return redirect(route('kategori_pengumuman.index'));
    }

    public function edit($id){
        $listKategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($listKategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

            return view('kategori_pengumuman.edit', compact('listKategoriPengumuman'));
    }

    public function update($id, Request $request){
        $listKategoriPengumuman=KategoriPengumuman::find($id);
        $input= $request->all();

        if(empty($listKategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        $listKategoriPengumuman->update($input);

        return redirect(route('kategori_pengumuman.index'));
    }

    public function destroy($id){
        $listKategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($listKategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        $listKategoriPengumuman->delete();

        return redirect(route('kategori_pengumuman.index'));
    }

    public function trash(){
        
        $listKategoriPengumuman=KategoriPengumuman::onlyTrashed()
                                ->whereNotNull('deleted_at')
                                ->get(); 

        return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));

    }
}
