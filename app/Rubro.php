<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    //
    protected $table = "rubro";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto","rubro_id","id");
    }
}
