<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TechnicalSkill extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'technical_skills';

    protected $fillable = [
        'name',
        'image'
    ];
}
