<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = "usuario";

    protected $fillable = ["id","nombre","password","telefono","correo","direccion","imagen",
                            "created_at","updated_at","rol_id"
                            ];

    public function rol()
    {
        return $this->belongsTo("App\Rol","rol_id","id");
    }
}
