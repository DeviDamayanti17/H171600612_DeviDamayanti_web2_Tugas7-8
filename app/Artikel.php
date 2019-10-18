<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
	use SoftDeletes;
	
    protected $table ='artikel';

    protected $fillable = [
    	'judul', 'isi', 'users_id', 'kategori_artikel_id'
    ];

    protected $casts=[
    		'deleted_at'=>'datetime'
    	];
}
