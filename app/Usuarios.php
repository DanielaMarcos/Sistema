<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'Usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['nombre', 'id_sexo', 'id_estadoc', 'id_edad', 'id_localidad'];

    function getEstado()
    {
        return $this->hasMany("App\Estados", 'id_estado', 'id_estado');


    }

    function getSexo()
    {
        return $this->hasMany("App\Sexos", 'id_sexo', 'id_sexo');
    }

    function getCivil()
    {
        return $this->hasMany("App\Civiles", 'id_estadoc', 'id_estadoc');
    }

    function getEdad()
    {
        return $this->hasMany("App\Edades", 'id_edad', 'id_edad');

    }

    function getLocalidad()
    {
        return $this->hasMany("App\Localidades", 'id_localidad', 'id_localidad');
    }
}