<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    //
    protected $table = "parte";

    protected $fillable = ["id","nombre","estado","posicion","tipo","observaciones",
                            "created_at","updated_at"];


    public function producto()
    {
        return $this->belongsToMany('\App\Producto','parte_producto','parte_id','producto_id');
    }

    public function idioma()
    {
        return $this->belongsToMany('\App\Idioma','parte_idioma','parte_id','idioma_id');
    }
}
