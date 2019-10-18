<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        
        $listKategoriBerita=KategoriBerita::all(); 


        return view ('kategori_berita.index',compact('listKategoriBerita'));
        //return view ('kategori_berita.index'->with('data',$listKategoriBerita);
    }

     public function show($id) {

        //$KategoriBerita=KategoriBerita::where('id',$id)->first();
        $listKategoriBerita=KategoriBerita::find($id);

        if(empty($listKategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

        return view ('kategori_berita.show', compact('listKategoriBerita'));
        
    }

    public function create(){
        return view('kategori_berita.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        KategoriBerita::create($input);

        return redirect(route('kategori_berita.index'));
    }

    public function edit($id){
        $listKategoriBerita=KategoriBerita::find($id);

        if(empty($listKategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

            return view('kategori_berita.edit', compact('listKategoriBerita'));
    }

    public function update($id, Request $request){
        $listKategoriBerita=KategoriBerita::find($id);
        $input= $request->all();

        if(empty($listKategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

        $listKategoriBerita->update($input);

        return redirect(route('kategori_berita.index'));
    }

    public function destroy($id){
        $listKategoriBerita=KategoriBerita::find($id);

        if(empty($listKategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

        $listKategoriBerita->delete();

        return redirect(route('kategori_berita.index'));
    }

    public function trash(){
        
        $listKategoriBerita=KategoriBerita::onlyTrashed()
                            ->whereNotNull('deleted_at')
                            ->get();

        return view ('kategori_berita.index',compact('listKategoriBerita'));
        //return view ('kategori_berita.index'->with('data',$listKategoriBerita);
    }
}
