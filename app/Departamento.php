<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = "departamentos";

    protected $fillable = ["id","nombre",
                            "created_at","updated_at"];
}
