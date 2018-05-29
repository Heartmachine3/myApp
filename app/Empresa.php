<?php

namespace myApp;
use myApp\Ciudad;
use myApp\Sucursal;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nit, razon_social, nombre_negocio, ciudad_id, telefono, direccion'];

    public function ciudad()
    {
        return $this -> belongsTo(Ciudad);
    }

    public function sucursal()
    {
        return $this ->hasMany(Sucursal);
    }

    protected $table = 'tb_empresas';
}
