<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $table = "provincias";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at","departamentos_id"];

    public function departamento()
    {
        return $this->belongsTo("App\Departamento","departamentos_id","id");
    }

    public function distrito()
    {
        return $this->hasMany("App\Distrito","provincias_id","id");
    }
}
