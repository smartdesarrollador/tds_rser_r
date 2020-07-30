<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    //
    protected $table = "cuota";

    protected $fillable = ["id","cantidad",
                            "created_at","updated_at"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","cuota_id","id");
    }
}
