<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";

    protected $fillable = ["id","nombre"];


    public function producto()
    {
        return $this->hasMany('App\Producto','categoria_id','id');
    }
}
