<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    //
    protected $table = "usuario";

    protected $fillable = ["id",
                            "created_at","updated_at","usuario_id","rol_id",
                            ];
}
