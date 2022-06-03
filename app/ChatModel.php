<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatModel extends Model
{
    protected $fillable=['ticket_no','user_from','user_to','subject','message','file','parent_id'];

}
