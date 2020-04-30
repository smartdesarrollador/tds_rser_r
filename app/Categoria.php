<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ["id","nombre"];


    public function producto()
    {
        return $this->hasMany('App\Producto','categorias_id','id');
    }
}
