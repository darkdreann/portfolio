<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactController extends Controller
{
    /**
     * Function to send email
     * @param ContactRequest $request parameters to send email
     * @return JsonResponse response if email is correctly sent
     * @throws HttpResponseException response if email is not correctly sent
     */
    public function send(ContactRequest $request)
    {
        $mailTo = config('mail.to');

        try {
            $mail = Mail::to($mailTo)->send(new ContactMail($request->all()));
        
            if ($mail instanceof SentMessage) {
                return response()->json(__('mail_success'));
            }
            
        } catch (Exception $e) {
            throw new HttpResponseException(response()->json(__('mail_failure'), 500));
        }
    }
}
