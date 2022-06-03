<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $fillable=['order_id','product_name','is_active'];
}
