<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = "proveedor";

    protected $fillable = ["id","nombre","direccion","telefono","observaciones",
                            "created_at","updated_at"];

    public function producto()
    {
        return $this->hasMany("App\Producto","proveedor_id","id");
    }

}
