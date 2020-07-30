<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadDeMedida extends Model
{
    //
    protected $table = "unidad_de_medida";

    protected $fillable = ["id","unidad_de_medida","descripcion",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto","unidad_de_medida_id","id");
    }
}
