<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = "marcas";

    protected $fillable = ["id","nombre","descripcion","imagen",
                            "created_at","updated_at"];
}
