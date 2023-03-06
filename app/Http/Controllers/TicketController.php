<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $content    = [
            'main'  => 'Ticket',
            'sub'   => ''
        ];

        return view('ticket.index', $content);
    }

    public function new_request()
    {
        $content    = [
            'main'  => 'Ticket',
            'sub'   => 'New Request'
        ];

        return view('ticket.request', $content);
    }
}
