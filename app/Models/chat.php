<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;


    public function user1(){

        return $this->belongsTo(User::class,"user_id1");
    }


    public function messages(){

        return $this->morphMany(message::class,"messageable");
    }

    public function user2(){

        return $this->belongsTo(User::class,"user_id2");
    }

}