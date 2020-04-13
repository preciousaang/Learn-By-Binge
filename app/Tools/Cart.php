<?php
namespace App\Tools;

class Cart{
    public $items = [];

    public function __construct(){
        $this->items = session()->get('cart');
    }

    public function addItem($item, $quantity=1){

        $itemArray = [
            $item->id => [
                'item' => $item,
                'quantity' => $quantity
            ]
        ];

        if(!$this->isEmpty()){
            if($this->in_cart($item)){
                //it is in the cart already so we find it and increment its quantity
                foreach($this->items as $key => $val){
                    if($item->id === $key){
                        (int) $this->items[$key]['quantity'] += (int) $quantity;
                    }
                }
            } else {
                //it isn't in the cart yet
                $this->cartItems = $this->cartItems + $itemArray;
            }
            //Finally put the item in the cart
        }else{
            //the cart is empty so just throw the items into it
            session(['cart'=>$itemArray]);
        }
    }

    private function in_cart($item){
        /*
            since the format of the cart will be in the format
            $items = [
                $item->id => [$item, $quantity]
            ]
        */
        return in_array($item->id, array_keys($this->items));
    }



    private function isEmpty(){
        //check if the cart is empty by checking the $this->items array
        return empty($this->items);
    }

    public function list(){
        return $this->items;
    }

    public function delete(){

    }
}
