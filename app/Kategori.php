<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katagori extends Model
{
    protected $fillable = [
    	'user_id','name','keterangan'
    ];
}
