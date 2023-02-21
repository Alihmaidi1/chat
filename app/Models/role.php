<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    public $fillable=["name","permissions"];

    public function getPermissionsAttribute($value){

        return json_decode($value);

    }


    public $hidden=["created_at","updated_at"];


}