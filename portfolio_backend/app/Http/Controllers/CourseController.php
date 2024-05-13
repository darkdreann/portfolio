<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use App\Http\Resources\CourseCollection;

class CourseController extends Controller
{
    /**
     * Function to get all courses ordered by completion year
     * @return CourseCollection response with all courses
     */
    public function index()
    {
        $data = Course::orderBy('completion_year', 'desc')
                            ->get();

        return new CourseCollection($data);
    }
}
