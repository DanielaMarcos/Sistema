<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edades extends Model
{
    //
    protected $table = 'Edades';
    protected $primaryKey='id_edad';
    protected $fillable = ['descripcion'];
}
