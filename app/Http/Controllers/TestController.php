<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Tools\Cart;

class TestController extends Controller
{
    public $users;

    public function __construct(UserRepository $users){
        $this->users = $users;
    }

    public function getIndex(){
        return response()->json($this->users->all());
    }

    public function getCart(Cart $cart){
        return response()->json($cart->list(), 200);
    }
}
