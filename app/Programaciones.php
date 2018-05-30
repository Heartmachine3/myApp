<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Arbitros;

class Programaciones extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nombre, equipo1, equipo2, grupo, fase, arbitro, estadio'];

    public function arbitro()
    {
        return $this -> belongsTo(Arbitros);
    }
}
