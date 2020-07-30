<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    //
    protected $table = "distrito";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at","provincia_id"];

    public function provincia()
    {
        return $this->belongsTo("App\Provincia","provincia_id","id");
    }

    public function zona_reparto()
    {
        return $this->hasMany("App\ZonaReparto","distrito_id","id");
    }
}
