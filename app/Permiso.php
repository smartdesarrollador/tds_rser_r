<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
    protected $table = "permiso";

    protected $fillable = ["id","nombre","slug",
                            "created_at","updated_at"
                            ];

    public function rol()
    {
        return $this->belongsToMany('App\Rol', 'usuario_rol', 'permiso_id', 'rol_id');
    }
}
