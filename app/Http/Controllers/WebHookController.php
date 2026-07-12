<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessWebhookJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebHookController extends Controller
{
    
    public function receive(Request $request)
    {
        ProcessWebhookJob::dispatch($request->all()); 

        return response()->json([ 
            'message'=> 'Webhook received'
        ]); 
    }
}
