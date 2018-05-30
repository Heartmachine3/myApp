<?php

use Illuminate\Support\Str;
use App\Exceptions\InvalidEnumException;

return [
    'phonetypes' => [
        '' => '',
        'celular' => 'Celular',
        'fijo' => 'Telefono Fijo',
        'smarthphone' => 'SmartPhone',
    ],

    'role' => [
        'admin' => 'Administrador',
        'user' => 'Usuario',
        'venues_coordinator' => 'Coordinador de Sedes',
        'general_coordinator' => 'Coordinador General',
        'soccer_player' => 'Jugador',
        'referee' => 'Arbitro',
        'tourism' => 'Tusirmo',
        'gastronomy' => 'Gastronomia',
        'hotel' => 'Hoteleria',
    ]
];