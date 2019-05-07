<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
 
    public function user() {
        return $this->hasOne('App\User');
    }
    
    public function bloodtype() {
        return $this->belongsTo('App\BloodType');
    }
    
    public function transactions() {
        return $this->hasMany('App\Transaction');
    }

}
