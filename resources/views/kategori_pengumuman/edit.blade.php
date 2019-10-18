@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">Tambah Kategori Pengumuman</div>

                <div class="card-body">
                	
                    {!! Form::model($listKategoriPengumuman, ['route'=>['kategori_pengumuman.update',$listKategoriPengumuman->id],'method'=>'patch']) !!}
                	
                    @include('kategori_pengumuman.form')

                	{!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection