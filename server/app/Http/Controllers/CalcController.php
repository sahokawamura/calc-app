<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function show($value_1, $typeofcalc, $value_2)
    {
        return view('calc.show', ['value_1' => $value_1, 'typeofcalc' => $typeofcalc, 'value_2' => $value_2]);
    }
}

# $a = $value_1;
# $b = $value_2;

# $sum  = $a + $b; // 和: summation
# $diff = $a - $b; // 差: difference
# $pro  = $a * $b; // 積: product
# $quo  = $a / $b; // 商: quotient