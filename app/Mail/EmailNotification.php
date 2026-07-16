<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\MailSetting;    

class EmailNotification extends Mailable
{
     use Queueable, SerializesModels;

    public string $messageContent;

    public function __construct(
        string $messageContent
        ){
            $this->messageContent = $messageContent;
        }
    public function build()
    {
        return $this->subject('New Contact Form Submission: Subject')
            // ->from(
            //     config('mail.from.address'),
            //     config('mail.from.name')
            //     )
            ->markdown('notifications::email', [
                'level' => 'info',
                'greeting' => 'New Contact Form Submission',
                'introLines' => [
                    // '**Name:** ' . config('mail.from.name'),
                    // '**Email:** ' . config('mail.from.address'),
                    // '**Subject:** ' .'Subject',
                    // '',
                    '**Message:**',
                    $this->messageContent,
                ],
                'outroLines' => [
                    'You can view this submission in the admin panel.'
                ],
            ]);
    }
}
