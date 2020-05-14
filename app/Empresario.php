<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    //
    protected $table = "empresarios";

    protected $fillable = ["id","nombre","apellido","telefono","ruc","correo","direccion","imagen",
                            "created_at","updated_at","notificaciones_id","tiendas_id"];

    public function notificacion()
    {
        return $this->belongsTo("App\Notificacion","notificaciones_id","id");
    }
}
