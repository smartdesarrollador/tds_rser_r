<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $table = "provincia";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at","departamentos_id"];

    public function departamento()
    {
        return $this->belongsTo("App\Departamento","departamento_id","id");
    }

    public function distrito()
    {
        return $this->hasMany("App\Distrito","provincia_id","id");
    }
}
