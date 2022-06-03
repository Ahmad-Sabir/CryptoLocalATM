<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verif_step2 extends Model
{
    protected $fillable = [
        'user_id','step2_image','admin_verif_status',
     ];
    }
