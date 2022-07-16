<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class asks extends Model
{
    protected $primaryKey = 'id';
    protected $table = "asks";
    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'description',
    ];
}
