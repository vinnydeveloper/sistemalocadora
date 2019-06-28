<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
     protected $table = "aluguel";
    protected $primaryKey = "aluguel_id";
    public $timestamps = false;
}
