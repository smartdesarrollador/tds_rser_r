<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = "marca";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto", "marca_id","id");
    }
}
