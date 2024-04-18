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
        'github',
        'youtube',
        'website'
    ];

    public function technologies() {
        return $this->belongsToMany(TechnicalSkill::class, null, 'projects_ids', 'technologies_ids');
    }
}
