<div>
    <div class="container" style="padding: 30px 0;" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2" > 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row" >
                            <div class="col-md-6" >
                                Add New Product
                            </div>
                            <div class="col-md-6" >
                                <div class="pull-right" >
                                    <a href="{{ route('admin.products') }}" class="btn btn-default" >
                                        <i class="fa fa-arrow-left" ></i>
                                        All Products
                                    </a>
                                </div>
                            </div>
                        </div>

                         <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                            <x-jet-validation-errors class="mb-4" />
                             <form enctype="multipart/form-data" class="form-horizontal" wire:submit.prevent='addproduct' >
                             
                                <div class="form-group">
                                    <label class="control-label col-md-4" >Product Name</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='name' wire:keyup='generateslug' class="form-control" required autofocus placeholder="Product Name" >
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Product Slug</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='slug'  class="form-control" required autofocus  placeholder="Product Slug" >
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Short Description</label>
                                    <div class="col-md-4">
                                        <textarea  wire:model='short_description'  class="form-control" required autofocus  placeholder="Short Description" ></textarea>
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Description</label>
                                    <div class="col-md-4">
                                        <textarea  wire:model='description'  class="form-control" required autofocus  placeholder="Description" ></textarea>
                                    </div>
                                </div>    


                                <div class="form-group">
                                    <label class="control-label col-md-4" >Regular Price</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='regular_price'  class="form-control" required autofocus  placeholder="regular-price" >
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Sale Price</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='sale_price'  class="form-control"  autofocus  placeholder="sale-price" >
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label class="control-label col-md-4" >SKU</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='sku'  class="form-control" required autofocus  placeholder="SKU" >
                                    </div>
                                </div>   


                                <div class="form-group">
                                    <label class="control-label col-md-4" >Stock</label>
                                    <div class="col-md-4">
                                        <select wire:model='stock_status'  class="form-control" >
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                        </div>
                                </div>   


                                <div class="form-group">
                                    <label class="control-label col-md-4" >Featured</label>
                                    <div class="col-md-4">
                                        <select wire:model='featured'  class="form-control" >
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        </div>
                                </div>   

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Quantity</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='quantity'  class="form-control" required autofocus  placeholder="Quantity" >
                                    </div>
                                </div>  


                                <div class="form-group">
                                    <label class="control-label col-md-4" >Product Image</label>
                                    <div class="col-md-4">
                                        <input type="file" wire:model='image'  class="input-file"  >
                                        @if($image)
                                            <img src="{{ $image->temporaryUrl()}}" width="120" />
                                        @endif
                                    </div>
                                </div>   


                                <div class="form-group">
                                    <label class="control-label col-md-4" >category</label>
                                    <div class="col-md-4">
                                        <select wire:model="category_id"  class="form-control" >
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                </div>   






                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" >
                                            <i class="fa fa-save" ></i>
                                            Save
                                        </button>
                                    </div>
                                </div>

                             </form>
                         </div>


                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
