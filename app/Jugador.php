<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{   
    protected $guarded = array();

    protected $fillable =  ['nombres', 'apellidos', 'equipo', 'seleccion_id'];

    protected $table = 'tb_jugadores';
}
