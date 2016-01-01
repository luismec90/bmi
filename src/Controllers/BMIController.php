<?php

namespace Montoya\BMI\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BMIController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('weight') && $request->has('high')) {

            $weight = $request->get('weight');
            $high = $request->get('high');

            $bmi = round($weight / ($high * $high),1);
        }

        return view('bmi::index', compact('bmi'));
    }
}