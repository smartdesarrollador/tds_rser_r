<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table = "horario";

    protected $fillable = ["id","descripcion_horario","estado",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","horario_id","id");
    }
}
