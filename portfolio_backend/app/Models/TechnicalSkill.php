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

    public function projects() {
        return $this->belongsToMany(Project::class, null, 'technologies_ids', 'projects_ids');
    }
}
