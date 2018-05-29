<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nombre, sede_id, paiscodigo, director_tecnico_id'];

    protected $table = 'tb_selecciones';
}
