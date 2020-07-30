<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    //
    protected $table = "gift_card";

    protected $fillable = ["id","valor",
                            "created_at","updated_at","tipo_gift_card_id"];

    public function tipo_gift_card()
    {
        return $this->hasMany("App\TipoGiftCard","tipo_gift_card_id","id");
    }
    
}
