<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $table = "feedback";

    protected $fillable = ["id","reaccion","mensaje", "fecha",
                            "created_at","updated_at","pedido_id"];

    public function pedido()
    {
        return $this->hasMany("App\Pedido","pedido_id","id");
    }
}
