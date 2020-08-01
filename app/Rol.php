<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = "rol";

    protected $fillable = ["nombre",
                            "created_at","updated_at"];

    protected $guarded = ["id"];

    public function usuario()
    {
        return $this->belongsToMany('App\Usuario', 'usuario_rol', 'rol_id', 'usuario_id');
    }
}




