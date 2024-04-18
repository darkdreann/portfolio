<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Error extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'errors';

    protected $fillable = [
        'title',
        'message',
        'date',
        'solved'
    ];
}

 