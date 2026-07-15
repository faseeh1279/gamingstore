<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MailSetting;

class MailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        MailSetting::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'transport' => 'smtp',
                'host' => 'sandbox.smtp.mailtrap.io',
                'port' => 2525,
                'encryption' => 'tls',
                'username' => env('MAIL_USERNAME'),
                'password' => env('MAIL_PASSWORD'),
                'from_address' => 'hello@example.com',
                'from_name' => 'Laravel Application',
            ]
        );
    }
}
