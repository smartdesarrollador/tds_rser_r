<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaDePago extends Model
{
    //
    protected $table = "forma_de_pagos";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","forma_pago_id","id");
    }
}
