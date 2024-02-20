@extends('main')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 py-5">
            <h2 class="text-center">Create New Goldsmith</h2>
            <form action="{{ route('admin.goldsmith.store') }}" method="POST">
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
                            <label for="">Phone:</label>
                            <input type="phone" name="phone" class="form-control">

                            @if($errors->has('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Address 1:</label>
                            <textarea name="address1" class="form-control"></textarea>
                            @if($errors->has('address1'))
                            <p class="text-danger">{{ $errors->first('address1') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Address 2:</label>
                            <textarea name="address2" class="form-control"></textarea>

                            @if($errors->has('address2'))
                            <p class="text-danger">{{ $errors->first('address2') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Remark:</label>
                            <textarea name="remark" class="form-control"></textarea>

                            @if($errors->has('remark'))
                            <p class="text-danger">{{ $errors->first('remark') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4 d-flex justify-content-end">
                        <a href="{{ route('admin.goldsmith.index') }}" class="btn py-1" data-dismiss="modal">Close</a>
                        <button type="submit" formtarget="" class="btn btn-primary py-1">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
