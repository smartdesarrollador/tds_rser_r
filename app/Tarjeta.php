<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
    protected $table = "tarjeta";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function cliente()
    {
        return $this->hasMany("App\Cliente","tarjeta_id","id");
    }
}
