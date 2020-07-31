<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = "pedido";

    protected $fillable = ["id","numero_pedido","fecha","total","impuesto",
                            "observaciones","delivery","feedback_enviado",
                            "feedback_token","created_at","updated_at","forma_pago_id",
                            "cuota_id","cliente_id","usuario_id","moneda_id",
                            "empresario_id","promocion_id","estado_pedido_id","descuento_id",
                            "horario_id","zona_reparto_id","transporte_id"];
                        
    public function producto()
    {
        return $this->belongsToMany('App\Producto', 'detalle_pedido', 'pedido_id', 'producto_id');
    }

    public function forma_pago()
    {
        return $this->belongsTo("App\FormaDePago","forma_pago_id","id");
    }

    public function cuota()
    {
        return $this->belongsTo("App\FormaDePago","cuota_id","id");
    }

    public function cliente()
    {
        return $this->belongsTo("App\FormaDePago","cliente_id","id");
    }

    public function usuario()
    {
        return $this->belongsTo("App\FormaDePago","usuario_id","id");
    }

    public function moneda()
    {
        return $this->belongsTo("App\FormaDePago","moneda_id","id");
    }

    public function empresario()
    {
        return $this->belongsTo("App\FormaDePago","empresario_id","id");
    }

    public function promocion()
    {
        return $this->belongsTo("App\FormaDePago","promocion_id","id");
    }

    public function estado_pedido()
    {
        return $this->belongsTo("App\FormaDePago","estado_pedido_id","id");
    }

    public function descuento()
    {
        return $this->belongsTo("App\FormaDePago","descuento_id","id");
    }

    public function horario()
    {
        return $this->belongsTo("App\FormaDePago","horario_id","id");
    }

    public function zona_reparto()
    {
        return $this->belongsTo("App\FormaDePago","zona_reparto_id","id");
    }

    public function transporte()
    {
        return $this->belongsTo("App\FormaDePago","transporte_id","id");
    }

    
}
