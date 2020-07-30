<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParteProducto extends Model
{
    //
    protected $table = "parte_producto";

    protected $fillable = ["id",
                            "created_at","updated_at","parte_id","producto_id"];
}
