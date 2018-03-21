<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = ['name', 'photo', 'position', 'description'];
}
