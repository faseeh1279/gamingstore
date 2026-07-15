<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\EmailNotification; 
use App\Models\MailSetting; 
use Illuminate\Support\Facades\Mail; 


class EmailController extends Controller
{
    // public function sendRuntimeEmail(string $receiverEmailAddress){ 
    //     // 1. Fetch the latest credentials from the database
    //     $settings = MailSetting::first(); 

    //     if ($settings) {
    //         // 2. Overwrite the default config values at runtime
    //         config([
    //             'mail.mailers.smtp.host'       => $settings->host,
    //             'mail.mailers.smtp.port'       => $settings->port,
    //             'mail.mailers.smtp.encryption' => $settings->encryption,
    //             'mail.mailers.smtp.username'   => $settings->username,
    //             'mail.mailers.smtp.password'   => $settings->password,
    //             'mail.from.address'            => $settings->from_address,
    //             'mail.from.name'               => $settings->from_name,
    //         ]);

    //         // 3. CRITICAL step for Laravel: Purge the old mailer instance 
    //         // This forces Laravel to rebuild the mailer using your new config
    //         app()->forgetInstance('mailer');
    //         config(['mail.default' => 'smtp']); 
    //     }

    //     // 4. Send the email normally
    //     Mail::to($receiverEmailAddress)->send(new NotificationEmail());

    //     return response()->json(['message' => 'Email sent using database credentials!']);
    // }

    public function sendRuntimeEmail(Request $request)
    { 
        // 1. Validate the incoming contact form request parameters
        $validatedData = $request->validate([
            'receiver_email'  => 'required|email',
            'sender_name'     => 'required|string|max:255',
            'sender_email'    => 'required|email',
            'subject'         => 'required|string|max:255',
            'message_content' => 'required|string',
        ]);

        // 2. Fetch the dynamic mail credentials securely from the database
        $settings = MailSetting::firstOrFail(); 

        // 3. Build a localized, isolated mailer engine on the fly
        $dynamicMailer = Mail::build([
            'transport'  => $settings->transport ?? 'smtp',
            'host'       => $settings->host,
            'port'       => $settings->port,
            'encryption' => $settings->encryption,
            'username'   => $settings->username,
            'password'   => $settings->password,
        ]);

        // 4. Instantiate the Mailable by passing all required constructor arguments
        $emailPayload = new EmailNotification(
            $settings,
            $validatedData['sender_name'],
            $validatedData['sender_email'],
            $validatedData['subject'],
            $validatedData['message_content']
        );

        // 5. Fire the email out cleanly using the isolated dynamic mailer
        $dynamicMailer->to($validatedData['receiver_email'])->send($emailPayload);

        return response()->json([
            'status'  => 'success',
            'message' => 'Email sent cleanly using isolated database credentials!'
        ]);
    }
}
