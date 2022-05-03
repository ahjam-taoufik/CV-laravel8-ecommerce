<div>
    <style>
        nav svg {
            height: 20px; 
        }
        nav .hidden{
            display:block !important;
         }
    </style>
 
   <div class="container" style="padding:30px 0;" >
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-heading" >
                     <div class="row" >
                       <div class="col-md-6">
                         <h3 class="panel-title">
                             <i class="fa fa-list"></i>
                             Product List
                         </h3>
                       </div>
                       <div class="col-md-6">
                           <a href="{{ route('admin.products')}}" class="btn btn-success pull-right">Add New Products</a>
                       </div>
                     </div>
                 </div>
                 <div class="panel-body">
                        @if(Session::has('message'))
                             <div class="alert alert-success">
                                 {{ Session::get('message') }}
                             </div>
                         @endif
                     
 
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Image</th>
                                 <th>Name</th>
                                 <th>Stock</th>
                                 <th>Price</th>
                                 <th>Category</th>
                                 <th>Created At</th>
                                 {{-- <th>Updated At</th> --}}
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($products as $product)
                                 <tr>
                                     <td>{{ $product->id }}</td>
                                     <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60" /></td>
                                     <td>{{ $product->name }}</td>
                                     <td>{{ $product->stock_status }}</td>
                                     <td>{{ $product->regular_price }}</td>
                                     <td>{{ $product->category->name }}</td>
                                     <td>{{ $product->created_at }}</td>
                                     {{-- <td>{{ $product->updated_at }}</td> --}}
                                     <td>
                                         {{-- <a href="{{ route('admin.editproduct',['product_slug'=>$product->slug] ) }}" class="btn btn-xs btn-info">
                                             <i class="fa fa-edit"></i>
                                         </a> --}}
                                         {{-- <a href="#" class="btn btn-xs btn-danger" wire:click="deleteProduct({{ $product->id }})" style="margin-left:15px">
                                             <i class="fa fa-trash"></i>
                                         </a> --}}
                                     </td>
                                 </tr>
                             @endforeach 
                         </tbody>
                     </table>
                     {{ $products->links() }}
 
                 </div>
             </div>
 
         </div>
 
     </div>
   </div>
 </div>
 