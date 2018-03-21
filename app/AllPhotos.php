<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllPhotos extends Model
{
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'category', 'photo'
    ];
}
