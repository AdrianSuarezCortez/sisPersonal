<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employed extends Model
{
    //tabla
    protected $table = 'user';
    protected $fillable = ['nombre','a_materno','a_paterno'];
}
