<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = "clientes";

    protected $fillable = ["id","nombre","apellido","telefono","correo","direccion","imagen",
                            "created_at","updated_at","tarjetas_id","distritos_id"];

    public function distrito()
    {
        return $this->belongsTo("App\Distrito","distritos_id","id");
    }

    public function tarjeta()
    {
        return $this->belognsTo("App\Tarjeta","tarjetas_id","id");
    }
}
