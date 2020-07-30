<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //
    protected $table = "tienda";

    protected $fillable = ["id","nombre","direccion",
                            "created_at","updated_at"];

    public function empresario()
    {
        return $this->belongsTo("App\Empresario","empresario_id","id");
    }
}
