<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
        
        $listGaleri=Galeri::all(); 

        return view ('galeri.index',compact('listGaleri'));
        
    }

    public function show($id) {

        $Galeri=Galeri::find($id);

        return view ('galeri.show', compact('Galeri'));
        
    }

    public function create(){
        $KategoriGaleri=kategoriGaleri::pluck('nama','id');

        return view ('galeri.create', compact('KategoriGaleri'));
        
    }

    public function store(Request $request){
        $input=$request->all();

        Galeri::create($input);

        return redirect(route('galeri.index'));

    }

    public function edit($id){
        $listGaleri=Galeri::find($id);
        $KategoriGaleri=KategoriGaleri::pluck('nama','id');

        if(empty($listGaleri)){
            return redirect(route('galeri.index'));
        }

            return view('galeri.edit', compact('listGaleri','KategoriGaleri'));
    }

    public function update($id, Request $request){
        $listGaleri=Galeri::find($id);
        $input= $request->all();

        if(empty($listGaleri)){
            return redirect(route('galeri.index'));
        }

        $listGaleri->update($input);

        return redirect(route('galeri.index'));
    }
    
    public function destroy($id){
        $listGaleri=Galeri::find($id);

        if(empty($listGaleri)){
            return redirect(route('galeri.index'));
        }

        $listGaleri->delete();

        return redirect(route('galeri.index'));
    }

    public function trash(){
        
        $listGaleri=galeri::onlyTrashed()
                    ->whereNotNull('deleted_at')
                    ->get();

        return view ('galeri.index',compact('listGaleri'));
       
    }
}
