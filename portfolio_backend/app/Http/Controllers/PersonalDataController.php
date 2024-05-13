<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

use App\Http\Resources\PersonalDataResource;
use App\Http\Resources\PersonalImageResource;

class PersonalDataController extends Controller
{
    /**
     * Function to get personal data
     * @return PersonalDataResource response with personal data
     * @throws HttpResponseException response if personal data is not found
     */
    public function index()
    {
        $data = PersonalData::first();

        if (!$data) {
            throw new HttpResponseException(response()->json(__('resource_not_found'), 404));
        }

        return new PersonalDataResource($data);
    }

    /**
     * Function to get personal image
     * @return PersonalImageResource response with personal image
     * @throws HttpResponseException response if personal image is not found
     */
    public function getImage()
    {
        $data = PersonalData::first();

        if (!$data) {
            throw new HttpResponseException(response()->json(__('resource_not_found'), 404));
        }

        return new PersonalImageResource($data);
    }

}
