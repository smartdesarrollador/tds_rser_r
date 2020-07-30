<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonaReparto extends Model
{
    //
    protected $table = "zona_reparto";

    protected $fillable = ["id","direccion","latitud","longitud",
                            "created_at","updated_at","distrito_id"];

    public function distrito()
    {
        return $this->belongsTo("App\Distrito","distrito_id","id");
    }
}
