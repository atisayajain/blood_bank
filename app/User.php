<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userprofile() {
        return $this->hasOne('App\UserProfile');
    }

    public function bloodbankprofile() {
        return $this->hasOne('App\BloodBankProfile');
    }

    public function isAdmin() {
        return ($this->type == 0)? true: false;
    }
    
    public function isUser() {
        return ($this->type == 1)? true: false;
    }
    
    public function isBloodBank() {
        return ($this->type == 2)? true: false;
    }

}
