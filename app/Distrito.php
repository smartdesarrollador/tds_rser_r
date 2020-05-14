<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    //
    protected $table = "distritos";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at","provincias_id"];

    public function provincias()
    {
        return $this->belongsTo("App\Provincia","provincias_id","id");
    }

    public function cliente()
    {
        return $this->hasMany("App\Cliente","distritos_id","id");
    }
}
