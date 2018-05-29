<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Ciudad;
use myApp\Empresa;
use myApp\Empleado;

class Sucursal extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nombre, empresa_id, ciudad_id, telefono, direccion'];

    public function ciudad()
    {
        return $this -> belongsTo(Ciudad);
    }

    public function empresa()
    {
        return $this -> belongsTo(Empresa);
    }

    public function empleado()
    {
        return $this ->hasMany(Empleado);
    }

    protected $table = 'tb_sucursales';
}
