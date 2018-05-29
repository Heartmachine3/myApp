<?php

namespace myApp;
use myApp\Sucursal;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $guarded = array();

    protected $fuillable = ['identificacion, nombres, apellidos, telefono, cargo, sucursal_id'];

    public function sucursal()
    {
        return $this -> belongsTo(Sucursal);
    }

    protected $table = 'tb_empleados';
}
