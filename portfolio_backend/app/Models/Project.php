<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'projects';

    protected $fillable = [
        'image',
        'title',
        'description',
        'technologies',
        'github',
        'youtube',
        'website'
    ];
}
