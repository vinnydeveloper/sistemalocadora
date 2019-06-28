<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmeCategoria extends Model
{
    protected $table = "filme_categoria";
    protected $primaryKey = "filme_id";
    public $timestamps = false;
}
