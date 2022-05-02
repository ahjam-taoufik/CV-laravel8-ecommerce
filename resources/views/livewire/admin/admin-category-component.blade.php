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
                            Category List
                        </h3>
                      </div>
                      <div class="col-md-6">
                          <a href="{{ route('admin.addcategory')}}" class="btn btn-success pull-right">Add New Category</a>
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
                                <th>Name</th>
                                <th>Slug</th>
                                {{-- <th>Created At</th> --}}
                                {{-- <th>Updated At</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    {{-- <td>{{ $category->created_at }}</td> --}}
                                    {{-- <td>{{ $category->updated_at }}</td> --}}
                                    <td>
                                        <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug] ) }}" class="btn btn-xs btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs btn-danger" wire:click="deleteCategory({{ $category->id }})" style="margin-left:15px">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    {{ $categories->links() }}

                </div>
            </div>

        </div>

    </div>
  </div>
</div>
