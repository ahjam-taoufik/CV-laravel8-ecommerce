<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($id)
    {
        $product=Cart::get($id);
        $qty=$product->qty+1;
        Cart::update($id,$qty);
    }
    public function decreaseQuantity($id)
    {
        $product=Cart::get($id);
        $qty=$product->qty-1;
        Cart::update($id,$qty);
    }

    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message','Product removed successfully');
    }

    public function destroyAll(){
        Cart::destroy();
        session()->flash('success_message','Cart is empty');
    }


    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
