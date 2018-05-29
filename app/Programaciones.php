<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Arbitros;

class Programaciones extends Model
{

    public function arbitro()
    {
        return $this -> belongsTo(Arbitros);
    }
}
