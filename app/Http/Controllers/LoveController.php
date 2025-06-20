<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LoveController extends Controller
{
    public function index()
    {
        // Let's assume your relationship started on 27 March 2023
        $startDate = Carbon::create(2023, 3, 27);
        $today = Carbon::now();
        $daysTogether = $today->diffInDays($startDate);

        return view('home', compact('daysTogether'));
    }

    public function letter()
    {
        return view('letter');
    }

    public function showQuiz()
{
    return view('quiz');
}

public function checkQuiz(Request $request)
{
    $answers = [
    'q1' => '27 March 2025',  // <--- updated year to 2025
    'q2' => 'Chocolate',
    'q3' => 'Black',
];


    $score = 0;
    foreach ($answers as $key => $correctAnswer) {
        if (strtolower($request->$key) === strtolower($correctAnswer)) {
            $score++;
        }
    }

    return view('quiz-result', ['score' => $score, 'total' => count($answers)]);
}
}