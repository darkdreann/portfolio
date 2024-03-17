<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Education extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'educations';

    protected $fillable = [
        'certification',
        'institution',
        'completion_year'
    ];
}
