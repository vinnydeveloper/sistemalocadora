<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmeAtor extends Model
{
    protected $table = "filme_ator";
    protected $primaryKey = "filme_id";
    public $timestamps = false;
}
