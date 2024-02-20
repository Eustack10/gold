@extends('main')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 py-5">
            <h2 class="text-center">Create New Product Type</h2>
            <form action="{{ route('admin.product_types.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Code:</label>
                            <input type="text" name="code" class="form-control">
                            @if($errors->has('code'))
                            <p class="text-danger">{{ $errors->first('code') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control">
                            @if($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('code') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">ABBR:</label>
                            <input type="text" name="abbr" class="form-control">

                            @if($errors->has('abbr'))
                            <p class="text-danger">{{ $errors->first('abbr') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4 d-flex justify-content-end">
                        <a href="{{ route('admin.product_types.index') }}" class="btn py-1" data-dismiss="modal">Close</a>
                        <button type="submit" formtarget="" class="btn btn-primary py-1">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
