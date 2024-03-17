<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

use App\Http\Resources\ExperienceCollection;

class ExperienceController extends Controller
{
    public function index()
    {
        $data = Experience::all();

        return new ExperienceCollection($data);
    }
}
