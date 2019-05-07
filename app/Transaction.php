<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    
    public function userprofile() {
        return $this->belongsTo('App\UserProfile');
    }
    
    public function bloodbankprofile() {
        return $this->belongsTo('App\BloodBankProfile');
    }

}
