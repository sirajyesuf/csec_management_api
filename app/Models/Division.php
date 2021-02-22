<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        
        return $this->belongsToMany(User::class,'division_user','division_id','user_id');

    }

    public function head(){

        return $this->belongsTo(User::class,'head_id');

    }
}
