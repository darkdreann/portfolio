<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use App\Http\Resources\CourseCollection;

class CourseController extends Controller
{
    public function index()
    {
        $data = Course::all();

        return new CourseCollection($data);
    }
}
