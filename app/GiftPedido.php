<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftPedido extends Model
{
    //
    protected $table = "gift_pedido";

    protected $fillable = ["id",
                            "created_at","updated_at","gift_id","pedido_id"];
}
