<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $content    = [
            'main'  => 'Dashboard',
            'sub'   => ''
        ];

        return view('dashboard.index', $content);
    }
}
