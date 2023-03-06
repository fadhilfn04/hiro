<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalRequestController extends Controller
{
    public function hb_confirmation()
    {
        $content    = [
            'main'  => 'Approval Request',
            'sub'   => 'Hiring Brief Confirmation'
        ];

        return view('approval-request.hiring_brief', $content);
    }
}
