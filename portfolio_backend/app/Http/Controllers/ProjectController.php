<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\TechnicalSkill;

use App\Http\Resources\ProjectCollection;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::with('technologies')->get();
        return new ProjectCollection($data);
    }


}
