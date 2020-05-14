<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //
    protected $table = "notificaciones";

    protected $fillable = ["id","remitente","destinatario","asunto","mensaje",
                            "created_at","updated_at"];

    public function empresario()
    {
        return $this->hasMany("App\Empresario","notificaciones_id","id");
    }
}
