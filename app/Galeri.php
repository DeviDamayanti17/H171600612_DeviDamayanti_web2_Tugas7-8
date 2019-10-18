<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
	use SoftDeletes;
	
    protected $table ='galeri';

    protected $fillable = [
    	'nama', 'keterangan', 'path', 'users_id', 'kategori_galeri_id'
    ];

    protected $casts=[
    		'deleted_at'=>'datetime'
    	];
}
