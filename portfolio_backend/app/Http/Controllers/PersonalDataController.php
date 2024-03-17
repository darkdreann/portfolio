<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;

use App\Http\Resources\PersonalDataResource;

class PersonalDataController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $data = PersonalData::first();

        return new PersonalDataResource($data);
    }

}
