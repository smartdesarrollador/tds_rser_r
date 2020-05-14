<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = "departamentos";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function provincia()
    {
        return $this->hasMany("App\Provincia","departamentos_id","id");
    }
}
