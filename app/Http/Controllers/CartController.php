<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CartController extends Controller
{
    public function list(Request $request){
        $collection = collect($request->session()->get('cart'))->keys()->map(function($key){
            return Course::find($key);
        });
        return response()->json($collection->all(), 200);
    }

    public function add(Request $request){
        $request->session()->push('cart.'.$request->post('id'), $request->post('id'));
        return response()->json("Ok", 200);
    }

    public function index(Request $request){
        dd($request->session()->all());
    }
}
