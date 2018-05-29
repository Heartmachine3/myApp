<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Pais;

class Ciudad extends Model
{
    protected $guarded = array();

    protected $fuillable = ['CiudadNombre, PaisCodigo, CiudadDistrito, CiudadPoblacion, _token'];

    public function pais()
    {
        return $this -> belongsTo(Pais);
    }

    protected $table = 'tb_ciudades';
}
