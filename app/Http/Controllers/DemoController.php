<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function log()
{
    
    Log::info('Info: This is a log message');
    Log::emergency('Emergency: This is an emergency log message');
    Log::alert('Alert: This is an alert log message');
    Log::critical('Critical: This is a critical log message');
    Log::error('Error: This is an error log message');
    Log::warning('Warning: This is a warning log message');
    Log::notice('Notice: This is a notice log message');
    Log::debug('Debug: This is a debug log message');

    return 'logged';
}

}
