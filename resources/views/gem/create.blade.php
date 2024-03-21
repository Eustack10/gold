@extends('main')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 py-5">
            <h2 class="text-center">Create New Gem</h2>
            <form action="{{ route('admin.gem.store') }}" method="POST">
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
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Unit:</label>
                            <select name="unit" class="form-control">
                                <option disabled selected>--Select Unit--</option>
                                <option value="CART">Cart</option>
                                <option value="RATI">Rati</option>
                            </select>
                            @if($errors->has('unit'))
                            <p class="text-danger">{{ $errors->first('unit') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Unit Price:</label>
                            <input type="text" name="unit_price" class="form-control">
                            @if($errors->has('unit_price'))
                            <p class="text-danger">{{ $errors->first('unit_price') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Lots:</label>
                            <select name="lots[]" class="form-control" multiple>
                                <option disabled selected>--Select Lots--</option>
                                @foreach ($lots as $lot)
                                    <option value="{{ $lot->id }}">{{ $lot->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('lots'))
                            <p class="text-danger">{{ $errors->first('lots') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4 d-flex justify-content-end">
                        <a href="{{ route('admin.gem.index') }}" class="btn py-1" data-dismiss="modal">Close</a>
                        <button type="submit" formtarget="" class="btn btn-primary py-1">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
