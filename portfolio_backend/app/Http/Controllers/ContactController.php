<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
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
