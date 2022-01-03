<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;
use Illuminate\Support\Facades\Log;

class QueueController extends Controller
{
    public function index(){

        for($i = 0; $i < 1000; $i++){
            dispatch( new ProcessPodcast());
        }
        // Log::debug('An informational message.');
        // Log::emergency('The system is down!');
        dd('send');
        
    }
}
