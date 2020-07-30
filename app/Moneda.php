<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    protected $table = "monedas";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","moneda_id","id");
    }

}
