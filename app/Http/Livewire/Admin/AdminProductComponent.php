<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
   
        unlink(public_path('assets\images\products').'\\'.$product->image);
       
        $product->delete();
        session()->flash('message', 'Product Deleted Successfully');
    }



    public function render()

    {
        $products=Product::paginate(10);
        return view('livewire.admin.admin-product-component',["products"=>$products])->layout('layouts.base');
    }
}

