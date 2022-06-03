<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verif_step1 extends Model
{
    protected $fillable = [
        'user_id','front_image','back_image','admin_verif_status',
     ];

}
