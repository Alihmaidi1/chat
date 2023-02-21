<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    public $fillable=["name"];


    public function users(){

        return $this->belongsToMany(User::class,user_group::class,"group_id","user_id");
    }


    public $hidden=["created_at","updated_at"];

}