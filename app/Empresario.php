<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    //
    protected $table = "empresario";

    protected $fillable = ["id","nombre","apellido","correo","direccion","telefono","ruc","imagen",
                            "created_at","updated_at","notificacion_id"];

    public function notificacion()
    {
        return $this->belongsTo("App\Notificacion","notificacion_id","id");
    }
}
