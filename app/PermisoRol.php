<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoRol extends Model
{
    //
    protected $table = "permiso";

    protected $fillable = ["id",
                            "created_at","updated_at","permiso_id","rol_id",
                            ];

   
}
