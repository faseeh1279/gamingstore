<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\EmailNotification; 
use App\Models\MailSetting;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail; 


class EmailController extends Controller
{
    public EmailService $emailService; 
    public function __construct(
        public EmailService $emailservice
    ){
       $this->emailService = $emailservice; 
    }
    
    public function sendRunTimeEmail(Request $request)
    { 
        $this->emailService->configure();
        $validated = $request->validate([ 
            'message_content' => 'required|string'
        ]); 
        Mail::to('faseehraza1279@gmail.com')->send(new EmailNotification($validated['message_content'])); 
    }
}
