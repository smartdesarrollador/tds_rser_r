<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = "conductor";

    protected $fillable = ["id","nombre","apellido","direccion","correo",
                            "created_at","updated_at","transporte_id"];

    public function Transporte()
    {
        return $this->belongsTo("App\Transporte","transporte_id","id");
    }
}
