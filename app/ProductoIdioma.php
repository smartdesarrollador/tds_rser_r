<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoIdioma extends Model
{
    //
    protected $table = "producto_idioma";

    protected $fillable = ["id",
                            "created_at","updated_at","producto_id","idioma_id"];
}
