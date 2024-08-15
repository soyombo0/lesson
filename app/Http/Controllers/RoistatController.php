<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoistatController extends Controller
{

    public function webhookHandle(Request $request)
    {
        Log::info(
            'email sent from {email_from} to {email_to}',
            ['email_from' => $request->email_from, 'email_to' => $request->email_to]
        );

        return response()->json(['status' => 'ok']);
    }

    public function form(Request $request)
    {

    }

    public function store(Request $request)
    {

    }
}
