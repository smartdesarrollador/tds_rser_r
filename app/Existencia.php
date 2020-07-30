<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Existencia extends Model
{
    //
    protected $table = "existencia";

    protected $fillable = ["id","existencia",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto", "existencia_id","id");
    }
}
