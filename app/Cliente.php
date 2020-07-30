<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = "cliente";

    protected $fillable = ["id","nombre","apellido","telefono","numero_documento","correo","direccion","imagen",
                            "created_at","updated_at","tarjeta_id","documento_identidad_id"];

    public function documento_identidad()
    {
        return $this->belongsTo("App\DocumentoIdentidad","documento_identidad_id","id");
    }

    public function tarjeta()
    {
        return $this->belognsTo("App\Tarjeta","tarjeta_id","id");
    }


}
