<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnicalSkill;

use App\Http\Resources\TechnicalSkillCollection;

class TechnicalSkillController extends Controller
{
    public function index()
    {
        $data = TechnicalSkill::all();

        return new TechnicalSkillCollection($data);
    }
}
