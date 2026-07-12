<?php

namespace App\Jobs;

use App\Models\WebhookEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable; 
use Illuminate\Queue\InteractsWithQueue; 
use Illuminate\Queue\SerializesModels; 
use Illuminate\Foundation\Queue\Queueable;

class ProcessWebhookJob implements ShouldQueue
{
    use Dispatchable,
        InteractsWithQueue,
        Queueable,
        SerializesModels;

    /**
     * Create a new job instance.
     */
    private array $data; 
    public function __construct(array $data)
    {
        $this->data = $data; 
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(5); 
        
        WebhookEvent::create([ 
            'name' => $this->data['name'], 
            'email' => $this->data['email'],
            'payload' => json_encode($this->data),
        ]);
    }
}
