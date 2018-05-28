<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Ciudad;

class Pais extends Model
{
    protected $fillable = [
        'PaisCodigo',
        'PaisNombre',
        'PaisContinente',
        'PaisRegion',
        'PaisArea',
        'PaisIndependencia',
        'PaisPoblacion',
        'PaisExpectativaDeVida',
        'PaisProductoInternoBruto',
        'PaisProductoInternoBrutoAntiguo',
        'PaisNombreLocal',
        'PaisGobierno',
        'PaisJefeDeEstado',
        'PaisCapital',
        'PaisCodigo2'
    ];

    public function ciudades()
    {
        return $this ->hasMany(Ciudad);
    }

    protected $table = 'tb_paises';
}
