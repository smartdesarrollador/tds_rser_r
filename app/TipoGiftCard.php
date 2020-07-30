<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGiftCard extends Model
{
    //

    protected $table = "tipo_gift_card";

    protected $fillable = ["id","nombre","created_at","updated_at"];


    public function gift_card()
    {
        return $this->hasMany('App\GiftCard','tipo_gift_card_id','id');
    }
}
