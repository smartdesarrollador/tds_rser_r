<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
    protected $table = "tarjetas";

    protected $fillable = ["id","tipo_tarjeta",
                            "created_at","updated_at"];

    public function cliente()
    {
        return $this->hasMany("App\Cliente","tarjetas_id","id");
    }
}
