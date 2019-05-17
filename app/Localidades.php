<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    //
    protected $table = 'Localidades';
    protected $primaryKey = 'id_localidad';
    protected $fillable = ['descripcion', 'id_municipio'];

    function getMunicipio()
    {
        return $this->hasMany("App\Municipios", 'id_municipio', 'id_municipio');
    }
}