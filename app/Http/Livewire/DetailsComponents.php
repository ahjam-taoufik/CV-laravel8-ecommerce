<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
class DetailsComponents extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug=$slug;
    }

    public function store($product_id,$product_name,$product_price){
    //    dd('ok');
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Product added to cart');
        return redirect()->route('cart');
 }


    public function render()
    {
        $product=Product::where('slug',$this->slug)->first();
        $popular_products=Product::inRandomOrder()->limit(4)->get();
        $related_products=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        return view('livewire.details-components',['product'=>$product,'popular_products'=>$popular_products,'related_products'=>$related_products])->layout('layouts.base');
    }
}
