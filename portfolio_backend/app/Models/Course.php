<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;


class Course extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'courses';

    protected $fillable = [
        'certification',
        'completion_year'
    ];
}
