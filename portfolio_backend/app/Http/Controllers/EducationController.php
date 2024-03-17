<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

use App\Http\Resources\EducationCollection;

class EducationController extends Controller
{
    public function index()
    {
        $data = Education::all();

        return new EducationCollection($data);
    }
}
