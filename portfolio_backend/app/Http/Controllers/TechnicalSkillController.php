<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnicalSkill;

use App\Http\Resources\TechnicalSkillCollection;

class TechnicalSkillController extends Controller
{
    /**
     * Function to get all technical skills
     * @return TechnicalSkillCollection response with all technical skills
     */
    public function index()
    {
        $data = TechnicalSkill::all();

        return new TechnicalSkillCollection($data);
    }
}
