<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
    //
    protected $table = "sms_log";

    protected $fillable = ["id","destino","url",
                            "created_at","updated_at"];

    
}
