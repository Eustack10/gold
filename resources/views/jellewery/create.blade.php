
  @extends('main')
@section('content')
    
<div class="container card">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 py-5">
            <h2 class="text-center mb-5">Create New Jellewery</h2>
            <form action="">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Name:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Code:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
            
                        <div class="form-group m-0 mb-2">
                            <label for="">Category:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Category 1</option>
                                <option value="">Category 2</option>
                                <option value="">Category 3</option>
                            </select>
                        </div>
            
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Type:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Category 1</option>
                                <option value="">Category 2</option>
                                <option value="">Category 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Image:</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Color:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            
            
               <div class="row">
                <div class="col-6">
                    <div class="form-group m-0 mb-2">
                        <label for="">Brand:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group m-0 mb-2">
                        <label for="">Size:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
               </div>
            
               <div class="row">
                <div class="col-12 d-flex justify-content-end mt-4">
                    <a type="button" class="btn py-1" href="{{ route('index') }}">Close</a>
                    <button type="button" class="btn btn-primary py-1" data-dismiss="modal">Create</button>
                </div>
               </div>
            </form>
        </div>
    </div>
</div>

@endsection
