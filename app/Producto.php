<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = "producto";

    protected $fillable = ["id","nombre","descripcion","precio","imagen","stock","fecha_ingreso","posicion","acumula_n_punto",
                            "created_at","updated_at","categoria_id",
                            "rubro_id","marca_id","unidad_de_medida_id","medida_id","calificacion_id","proveedor_id","existencia_id"];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id','id');
    }

    public function rubro()
    {
        return $this->belongsTo("App\Rubro","rubro_id","id");
    }
    
    public function marca()
    {
        return $this->belongsTo("App\Marca","marca_id","id");
    }

    public function unidad_de_medida()
    {
        return $this->belongsTo("App\UnidadDeMedida","unidad_de_medida_id","id");
    }

    public function medida()
    {
        return $this->belongsTo('App\Medida','medida_id','id');
    }

    public function calificacion()
    {
        return $this->belongsTo('App\Calificacion','calificacion_id','id');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor','proveedor_id','id');
    }

    public function existencia()
    {
        return $this->belongsTo("App\Existencia","existencia_id","id");
    }
}

