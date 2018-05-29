<?php

namespace myApp;

use Illuminate\Database\Eloquent\Model;
use myApp\Ciudad;

class Sede extends Model
{
    protected $guarded = array();

    protected $fuillable = ['nombre, ciudad_id'];

    public function ciudad()
    {
        return $this -> belongsTo(Ciudad);
    }

    protected $table = 'tb_sedes';
}
