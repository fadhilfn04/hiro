<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiringProcessController extends Controller
{
    public function hiring_brief()
    {
        $content    = [
            'main'  => 'Hiring Process',
            'sub'   => 'Hiring Brief'
        ];

        return view('hiring-process.hiring_brief', $content);
    }

    public function sourcing_screening()
    {
        $content    = [
            'main'  => 'Hiring Process',
            'sub'   => 'Sourcing & Screening'
        ];

        return view('hiring-process.sourcing_screening', $content);
    }

    public function interview_process()
    {
        $content    = [
            'main'  => 'Hiring Process',
            'sub'   => 'Interview Process'
        ];

        return view('hiring-process.interview_process', $content);
    }

    public function final_process()
    {
        $content    = [
            'main'  => 'Hiring Process',
            'sub'   => 'Final Process'
        ];

        return view('hiring-process.final_process', $content);
    }
}
