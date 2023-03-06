<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function cv_review()
    {
        $content    = [
            'main'  => 'Feedback',
            'sub'   => 'CV Review'
        ];

        return view('feedback.cv_review', $content);
    }

    public function interview_feedback()
    {
        $content    = [
            'main'  => 'Feedback',
            'sub'   => 'Interview Feedback '
        ];

        return view('feedback.interview_feedback', $content);
    }
}
