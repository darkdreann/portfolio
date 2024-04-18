<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use App\Models\Error;

class ErrorController extends Controller
{
    public function store(ErrorRequest $request){
        try{
            Error::create($request->all());
            return response()->json(__('error_saved'), 201);
        }catch(Exception $e){
            throw new HttpResponseException(response()->json(__('error_not_saved'), 500));
        }
    }
}
