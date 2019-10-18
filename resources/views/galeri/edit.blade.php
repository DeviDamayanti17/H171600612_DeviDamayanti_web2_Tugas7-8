@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-success text-center">Tambah Galeri</div>

                <div class="card-body">
                	
                    {!! Form::model($listGaleri, ['route'=>['galeri.update',$listGaleri->id],'method'=>'patch']) !!}
                	
                    @include('galeri.form')

                	{!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

        <script>
                $(document).ready(function() {
                 CKEDITOR.replace( 'isi' );


                });
        </script>
@endsection