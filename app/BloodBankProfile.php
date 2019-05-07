<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBankProfile extends Model
{
    
    public function user() {
        return $this->hasOne('App\User');
    }
    
    public function transactions() {
        return $this->hasMany('App\Transaction');
    }

}
