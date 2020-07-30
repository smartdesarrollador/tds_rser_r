<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParteIdioma extends Model
{
    //
    protected $table = "parte_idioma";

    protected $fillable = ["id",
                            "created_at","updated_at","parte_id","idioma_id"];
}
