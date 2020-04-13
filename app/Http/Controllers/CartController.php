<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Tools\Cart;

class CartController extends Controller
{
    public function list(Request $request){
        $cart = $request->session()->get('cart');
        return response()->json($cart, 200);
    }

    public function add(Request $request, Cart $cart){
        $request->validate([
            'id' => 'required'
        ]);

        $course = Course::find($request->post('id'));

        $cart->addItem($course);


        // $itemArray = array(
        //     $course->id => array(
        //         'id' => $course->id,
        //         'name' => $course->title,
        //         'quantity' => 1,
        //         'image' => asset(config('paths.course_images').$course->image),
        //         'price' => $course->price,
        //     )
        // );

        // if(!empty(session()->get('cart'))){
        //     $cartItems = session()->get('cart');
        //     //check if the course is already in the cart
        //     if(in_array($course->id, array_keys($cartItems))){
        //         foreach($cartItems as $key => $val){
        //             if($course->id == $key){
        //                 // check if theres any quantity
        //                 if(empty($cartItems[$key]["quantity"])){
        //                     //if there's none initilize as 0 to avoid integer error
        //                     $cartItems[$key]["quantity"] = 0;
        //                 }
        //                 $cartItems[$key]['quantity'] += 1;
        //             }
        //         }
        //     }else{
        //         //it isn't in the cart yet

        //         //use the union operator instead of the array_merge to avoid renumbering of indices
        //         $cartItems = $cartItems + $itemArray;
        //     }
        //     //Finally throw it in the cart
        //     session(['cart'=>$cartItems]);
        // }else{
        //     //The cart is empty so just throw in the items into it
        //     session(['cart'=>$itemArray]);
        // }


        // $request->session()->push('cart.'.$request->post('id'), $request->post('id'));
        return response()->json(null, 200);
    }

    public function index(Request $request){
        dd($request->session()->all());
    }
}
