<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Tools\Cart;

class CartController extends Controller
{
    public function list(Request $request, Cart $cart){
        $items = $cart->list();
        return response()->json($items, 200);
    }

    public function add(Request $request, Cart $cart){
        $request->validate([
            'id' => 'required|exists:courses'
        ]);

        $course = Course::find($request->post('id'));

        $cart->addItem($course);

        return response()->json(null, 200);
    }

    public function index(Request $request){
        dd($request->session()->all());
    }
}
