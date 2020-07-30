<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //
    protected $table = "calificacion";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto", "calificacion_id","id");
    }
}
