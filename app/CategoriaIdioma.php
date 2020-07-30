<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaIdioma extends Model
{
    //
    protected $table = "categoria_idioma";

    protected $fillable = ["id",
                            "created_at","updated_at","categoria_id","idioma_id"];
}
