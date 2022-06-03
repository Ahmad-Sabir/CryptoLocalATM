<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeModel extends Model
{
    protected $fillable=['admin_fee','ship_fee','low_fee','medium_fee','normal_fee','high_fee','maximum_purchase','minimum_purchase'];

}
