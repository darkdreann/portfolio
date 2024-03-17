<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftSkill;

use App\Http\Resources\SoftSkillCollection;

class SoftSkillController extends Controller
{
    public function index()
    {
        $data = SoftSkill::all();

        return new SoftSkillCollection($data);
    }
}
