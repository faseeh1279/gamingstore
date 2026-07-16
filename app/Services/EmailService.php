<?php

namespace App\Services;

use App\Models\MailSetting;

class EmailService
{
    public function configure(): void { 
        $settings = MailSetting::firstOrFail();
        config([
            'mail.default' => 'smtp',
            'mail.mailers.smtp.transport' => $settings->transport,
            'mail.mailers.smtp.host' => $settings->host,
            'mail.mailers.smtp.port' => $settings->port,
            'mail.mailers.smtp.username' => $settings->username,
            'mail.mailers.smtp.password' => $settings->password,
            'mail.mailers.smtp.encryption' => $settings->encryption,
            'mail.from.address' => $settings->from_address,
            'mail.from.name' => $settings->from_name
        ]);
    }
}
