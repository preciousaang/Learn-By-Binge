<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class FrontendController extends Controller
{
    public function index(){

        $context = [
            'courses' => Course::class,
        ];
        return view('frontend.index', $context);
    }
}
