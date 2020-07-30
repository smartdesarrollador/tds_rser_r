<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    //
    protected $table = "descuentos";

    protected $fillable = ["id","descuento",
                            "created_at","updated_at"];


    public function pedido()
    {
        return $this->hasMany("App\Pedido","descuento_id","id");
    }
}
