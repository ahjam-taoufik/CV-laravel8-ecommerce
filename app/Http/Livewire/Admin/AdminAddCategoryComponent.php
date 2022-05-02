<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
   public $name;
   public $slug;

   public function generateslug(){
       $this->slug=Str::slug($this->name);
   }

   public function storeCategory(){
         $this->validate([
              'name'=>'required|min:3|max:50|unique:categories',
              'slug'=>'required|min:3|max:50'
         ]);
         $category=new Category();
         $category->name=$this->name;
         $category->slug=$this->slug;
         $category->save();
         session()->flash('message','Category Added Successfully');
         $this->name=null;
         $this->slug=null;
   }


    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
