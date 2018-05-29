<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Pais;
use myApp\Empresa;
use myApp\Sucursal;

class Ciudad extends Model
{
    protected $guarded = array();

    protected $fuillable = ['CiudadNombre, PaisCodigo, CiudadDistrito, CiudadPoblacion, _token'];

    public function pais()
    {
        return $this -> belongsTo(Pais);
    }

    public function empresas()
    {
        return $this ->hasMany(Empresa);
    }

    public function sucursal()
    {
        return $this ->hasMany(Sucursal);
    }

    protected $table = 'tb_ciudades';
}
