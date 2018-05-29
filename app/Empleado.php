<?php

namespace myApp;
use myApp\Ciudad;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nit, razon_social, nombre_negocio, ciudad_id, telefono, direccion'];

    public function ciudad()
    {
        return $this -> belongsTo(Ciudad);
    }

    protected $table = 'tb_empresas';
}
