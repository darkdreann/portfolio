<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class SoftSkill extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'soft_skills';

    protected $fillable = [
        'name'
    ];
}
