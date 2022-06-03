<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodesData extends Model
{
    protected $fillable=['name','voucher', 'qr_code'];

}
