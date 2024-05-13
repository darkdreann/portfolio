<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

use App\Http\Resources\ExperienceCollection;

class ExperienceController extends Controller
{
    /**
     * Function to get all experiences ordered by start date and end date
     * @return ExperienceCollection response with all experiences
     */
    public function index()
    {
        $data = Experience::orderBy('start_date', 'desc')
                            ->orderBy('end_date', 'desc')
                            ->get();

        return new ExperienceCollection($data);
    }
}
