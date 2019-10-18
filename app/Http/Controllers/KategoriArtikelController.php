<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	
    	$listKategoriArtikel=KategoriArtikel::all(); 

    	return view ('kategori_artikel.index',compact('listKategoriArtikel'));
    	//return view ('kategori_artikel.index'->with('data',$listKategoriArtikel);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$listKategoriArtikel=KategoriArtikel::find($id);

        if(empty($listKategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

    	return view ('kategori_artikel.show', compact('listKategoriArtikel'));
    	
    }

    public function create(){

        return view ('kategori_artikel.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriArtikel::create($input);
        
        return redirect(route('kategori_artikel.index'));
    }

    public function edit($id){
        $listKategoriArtikel=KategoriArtikel::find($id);

        if(empty($listKategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

            return view('kategori_artikel.edit', compact('listKategoriArtikel'));
    }

    public function update($id, Request $request){
        $listKategoriArtikel=KategoriArtikel::find($id);
        $input= $request->all();

        if(empty($listKategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        $listKategoriArtikel->update($input);

        return redirect(route('kategori_artikel.index'));
    }

    public function destroy($id){
        $listKategoriArtikel=KategoriArtikel::find($id);

        if(empty($listKategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        $listKategoriArtikel->delete();

        return redirect(route('kategori_artikel.index'));
    }

    public function trash(){
        
        $listKategoriArtikel=KategoriArtikel::onlyTrashed()
                            ->whereNotNull('deleted_at')
                            ->get();

        return view ('kategori_artikel.index',compact('listKategoriArtikel'));
        //return view ('kategori_artikel.index'->with('data',$listKategoriArtikel);
    }
}

