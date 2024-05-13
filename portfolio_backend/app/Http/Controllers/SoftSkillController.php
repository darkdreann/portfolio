<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftSkill;

use App\Http\Resources\SoftSkillCollection;

class SoftSkillController extends Controller
{
    /**
     * Function to get all soft skills
     * @return SoftSkillCollection response with all soft skills
     */
    public function index()
    {
        $data = SoftSkill::all();

        return new SoftSkillCollection($data);
    }
}
