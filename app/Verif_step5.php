<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verif_step5 extends Model
{
    protected $fillable = [
    'user_id','fname','dob', 'nationality', 'city','zipcode',
    'address','state', 'political_exposed', 'occupation',
    'industry','income','worth', 'trade','activity',
   'admin_verif_status',
 ];
 public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }
}
