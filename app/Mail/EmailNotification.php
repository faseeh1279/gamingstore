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

    /**
     * Create a new message instance.
     */
    public MailSetting $mailSetting;
    public string $name;
    public string $email;
    public string $mailSubject;
    public string $messageContent;

    public function __construct(
        MailSetting $mailSetting, 
        string $name, 
        string $email, 
        string $subject, 
        string $messageContent)
    {
        $this->mailSetting = $mailSetting;
        $this->name = $name;
        $this->email = $email;
        $this->mailSubject = $subject;
        $this->messageContent = $messageContent;
    }
    public function build()
    {
        return $this->subject('New Contact Form Submission: ' . $this->mailSubject)
            ->from($this->mailSetting->from_address, $this->mailSetting->from_name)
            ->markdown('notifications::email', [
                'level' => 'info',
                'greeting' => 'New Contact Form Submission',
                'introLines' => [
                    '**Name:** ' . $this->name,
                    '**Email:** ' . $this->email,
                    '**Subject:** ' . $this->mailSubject,
                    '',
                    '**Message:**',
                    $this->messageContent,
                ],
                'outroLines' => [
                    'You can view this submission in the admin panel.'
                ],
            ]);
    }
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Notification Email',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
