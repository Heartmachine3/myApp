<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Programaciones;

class Arbitro extends Model
{
    protected $guarded = array();

    protected $fuillable = ['identificacion, nombres, apellidos'];

    public function programacion()
    {
        return $this ->hasMany(Programaciones);
    }

    protected $table = 'tb_arbitros';
}
