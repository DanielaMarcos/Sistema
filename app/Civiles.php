<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civiles extends Model
{
    //
    protected $table = 'Estadoscivil';
    protected $primaryKey='id_estadoc';
    protected $fillable = ['descripcion'];
}
