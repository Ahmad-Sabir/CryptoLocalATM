<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginHistoryModel extends Model
{
    protected $fillable=['user_id','login_time','ip_address','login_status'];

}
