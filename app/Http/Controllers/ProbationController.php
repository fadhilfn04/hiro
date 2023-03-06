<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProbationController extends Controller
{
    public function index()
    {
        $content    = [
            'main'  => 'Probation',
            'sub'   => ''
        ];

        return view('probation.index', $content);
    }
}
