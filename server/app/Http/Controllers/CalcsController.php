<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function show($num1, $operator, $num2)
    {
        if ($operator == 'addition') {
            return view('calc.show', ['answer' => $num1 + $num2]);
        } elseif ($operator == 'subtraction') {
            return view('calc.show', ['answer' => $num1 - $num2]);
        } elseif ($operator == 'multiplication') {
            return view ('calc.show', ['answer' => $num1 * $num2]);
        } elseif ($operator == 'division') {
            return view ('calc.show', ['answer' => $num1 / $num2]);
        }
    }
}