<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //
    protected $table = "Idioma";

    protected $fillable = ["id","nombre","estado_idioma",
                            "created_at","updated_at"];

    
    public function parte()
    {
        return $this->belongsToMany('\App\Parte','parte_idioma','idioma_id','parte_id');
    }

    public function categoria()
    {
        return $this->belongsToMany('\App\Categoria','categoria_idioma','idioma_id','categoria_id');
    }

    public function producto()
    {
        return $this->belongsToMany('\App\Producto','producto_idioma','idioma_id','producto_id');
    }
}
