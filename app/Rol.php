<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = "rol";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function usuario()
    {
        return $this->hasMany("App\Usuario","rol_id","id");
    }
}




