@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-center">List Pengumuman</div>
                <div class="card-body">
                   <td>
                    <a href="{!! route('pengumuman.index') !!}" class="btn btn-primary">Data Yang Tersimpan</a>
                    <a href="{!! route('pengumuman.trash') !!}" class="btn btn-danger">Data Yang Terhapus</a>
                    </td>
                <table class="table table-bordered">
                    <thead class="bg-success text-center">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                        <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-primary">Detail</a>
                        <a href="{!! route('pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Edit</a>

                        {!! Form::open(['route'=>['pengumuman.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Apakah Anda Yakin Menghapus Data Tersebut ?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                 <a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection