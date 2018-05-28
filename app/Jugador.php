<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{   
    protected $fillable =  ['nombres', 'apellidos', 'equipo', ''];

    protected $table = 'tb_jugadores';
}
