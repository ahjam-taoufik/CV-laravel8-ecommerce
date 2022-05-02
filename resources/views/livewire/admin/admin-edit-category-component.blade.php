<div>
    <div class="container" style="padding: 30px 0;" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2" > 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row" >
                            <div class="col-md-6" >
                                Edit Category
                            </div>
                            <div class="col-md-6" >
                                <div class="pull-right" >
                                    <a href="{{ route('admin.categories') }}" class="btn btn-default" >
                                        <i class="fa fa-arrow-left" ></i>
                                        All Categories
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
                             <form class="form-horizontal" wire:submit.prevent='updateCategory' >
                             
                                <div class="form-group">
                                    <label class="control-label col-md-4" >Category Name</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='name' wire:keyup='generateslug' class="form-control" required autofocus placeholder="Category Name" >
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label class="control-label col-md-4" >Category Slug</label>
                                    <div class="col-md-4">
                                        <input type="text" wire:model='slug'  class="form-control" required autofocus  placeholder="Category Slug" >
                                    </div>
                                </div>                              
                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" >
                                            <i class="fa fa-save" ></i>
                                            Update
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
