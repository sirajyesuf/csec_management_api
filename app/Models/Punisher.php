<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punisher extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function puser(){

        return $this->belongsTo(User::class,'puser_id');
    }
    public function cuser(){

        return $this->belongsTo(User::class,'cuser_id');
    }

}
