<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $fillable=["nombre","descripcion","documento","categoria_id"];
}
