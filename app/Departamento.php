<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = "departamento";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at","pais_id"];

    public function provincia()
    {
        return $this->hasMany("App\Provincia","departamento_id","id");
    }

    public function pais()
    {
        return $this->belongsTo("App\Pais","pais_id","id");
    }
}
