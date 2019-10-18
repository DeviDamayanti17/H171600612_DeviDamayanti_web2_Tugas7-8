@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">List Galeri</div>
                
                <div class="card-body">
                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">ID</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Nama</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->nama !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Keterangan</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->keterangan !!}</label>
                    </div>

                     <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Path</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->path !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Users Id</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->users_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Create</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $Galeri->created_at->format('d/m/Y H:i:s') !!}</label>
                    </div>

                    
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="{!! route('galeri.index')!!}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection