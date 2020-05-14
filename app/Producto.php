<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = "productos";

    protected $fillable = ["id","nombre","descripcion","precio","imagen",
                            "created_at","updated_at","categorias_id",
                            "rubros_id","marcas_id","unidades_de_medidas_id","existencias_id"];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categorias_id','id');
    }

    public function marca()
    {
        return $this->belongsTo("App\Marca","marcas_id","id");
    }

    public function rubro()
    {
        return $this->belongsTo("App\Rubro","rubros_id","id");
    }

    public function existencia()
    {
        return $this->belongsTo("App\Existencia","existencias_id","id");
    }

    public function unidad_de_medida()
    {
        return $this->belongsTo("App\UnidadDeMedida","unidades_de_medidas_id","id");
    }
}

