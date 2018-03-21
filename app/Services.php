<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use Sluggable;
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'name','short', 'description','cover', 'preview', 'style'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
