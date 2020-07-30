<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoIdentidad extends Model
{
    //
    protected $table = "documento_identidad";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];

    public function cliente()
    {
        return $this->hasMany("App\Cliente","documento_identidad_id","id");
    }
}
