<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    //
    protected $table = "promocion";

    protected $fillable = ["id","descripcion",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","promocion_id","id");
    }
}
