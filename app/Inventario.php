<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "inventario";
    protected $primaryKey = "inventario_id";
    public $timestamps = false;
}
