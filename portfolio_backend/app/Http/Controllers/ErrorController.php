<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use App\Models\Error;
use Illuminate\Http\Exceptions\HttpResponseException;

class ErrorController extends Controller
{
    /**
     * Function to store error in database
     * @param ErrorRequest $request parameters to store error
     * @return JsonResponse response if error is correctly stored
     * @throws HttpResponseException response if error is not correctly stored
     */
    public function store(ErrorRequest $request){
        try{
            Error::create($request->all());
            return response()->json(__('error_saved'), 201);
        }catch(Exception $e){
            throw new HttpResponseException(response()->json(__('error_not_saved'), 500));
        }
    }
}
