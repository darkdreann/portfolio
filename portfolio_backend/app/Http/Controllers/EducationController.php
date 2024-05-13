<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

use App\Http\Resources\EducationCollection;

class EducationController extends Controller
{
    /**
     * Function to get all educations ordered by completion year
     * @return EducationCollection educations
     */
    public function index()
    {
        $data = Education::orderBy('completion_year', 'desc')
                            ->get();

        return new EducationCollection($data);
    }
}
