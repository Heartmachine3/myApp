<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Pais;
use myApp\Empresa;
use myApp\Sucursal;
use myApp\Sede;

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

    public function sede()
    {
        return $this ->hasMany(Sede);
    }

    protected $table = 'tb_ciudades';
}
