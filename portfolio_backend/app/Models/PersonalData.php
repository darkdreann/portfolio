<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class PersonalData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'personal_data';

    protected $fillable = [
        'avatar',
        'name',
        'email',
        'about_me',
        'github',
        'linkedin',
        'cv'
    ];
}
