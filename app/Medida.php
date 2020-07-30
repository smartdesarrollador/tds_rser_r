<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    //
    protected $table = "medida";

    protected $fillable = ["id","medida",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto", "medida_id","id");
    }
}
