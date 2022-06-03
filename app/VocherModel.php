<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VocherModel extends Model
{
    protected $fillable=['vocher_id','client_address','shipping_amount','created_date','experir_date','using_date'];

}
