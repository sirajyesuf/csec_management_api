<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded  = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles(){

        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    public function punishes(){
        
        return $this->hasMany(Punisher::class,'puser_id');
    }
    public function criminals(){
        
        return $this->hasMany(Punisher::class,'cuser_id');
    }

    public function divisions(){
        return $this->belongsToMany(Division::class,'division_user','user_id','division_id');
    }
    public function head(){
        return $this->hasOne(Division::class,'head_id');
    }
}
