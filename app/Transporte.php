<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    //
    protected $table = "transporte";

    protected $fillable = ["id","nombre","tiempo","imagen","url_seguimiento",
                            "created_at","updated_at"];

    public function conductor()
    {
        return $this->hasMany("App\Conductor","transporte_id","id");
    }
}
