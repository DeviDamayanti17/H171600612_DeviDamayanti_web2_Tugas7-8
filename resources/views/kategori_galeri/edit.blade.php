@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">Tambah Kategori Galeri</div>

                <div class="card-body">
                	
                    {!! Form::model($listKategoriGaleri, ['route'=>['kategori_galeri.update',$listKategoriGaleri->id],'method'=>'patch']) !!}
                	
                    @include('kategori_galeri.form')

                	{!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection