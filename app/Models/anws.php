<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class anws extends Model
{
    protected $primaryKey = 'id';
    protected $table = "anws";
    protected $fillable = [
        'question_id',
        'answer',
    ];
}
