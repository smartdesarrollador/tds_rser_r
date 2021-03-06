<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDePedido extends Model
{
    //
    protected $table = "estado_pedido";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","estado_pedido_id","id");
    }
}
