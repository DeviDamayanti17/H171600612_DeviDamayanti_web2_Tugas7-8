@csrf

<div class="form-group row">
        <label form ="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-10">
            {!! Form::text('judul', null, ['class'=>"form-control", 'required', 'autofocus']); !!}
            
            @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
    <label form ="kategori_berita_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Berita') }}</label>

        <div class="col-md-10">
            {!! Form::select('kategori_berita_id', $KategoriBerita,null, ["class"=>"form-control","required"] ); !!}

            @error('kategori_berita_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
        <label form ="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

        <div class="col-md-10">
            {!! Form::textarea('isi', null,['class'=>'form-control']); !!}

            @error('isi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

{!! Form::hidden('users_id', Auth::id() ); !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('berita.index')!!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
    </div>
</div>
