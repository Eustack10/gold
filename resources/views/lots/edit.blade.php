@extends('main')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 py-5">
            <h2 class="text-center">Update lots</h2>
            <form action="{{ route('admin.lots.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                {{method_field('PUT')}}
                @csrf
                <div class="row">

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Code:</label>
                            <select name="gems_id" class="form-control">
                                <option disabled>--Select Gem--</option>
                                @foreach ($gems as $g)
                                    <option value="{{ $g->id }}" {{ $data->gems_id === $g->id ? 'selected' : '' }}>
                                        {{ $g->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('gems_id'))
                            <p class="text-danger">{{ $errors->first('gems_id') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Code:</label>
                            <input type="text" name="code" class="form-control" value="{{ $data->code }}">
                            @if($errors->has('code'))
                            <p class="text-danger">{{ $errors->first('code') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                            @if($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Weight:</label>
                            <input type="number" name="weight" class="form-control" value="{{ $data->weight }}">
                            @if($errors->has('weight'))
                            <p class="text-danger">{{ $errors->first('weight') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Unit:</label>
                            <input type="text" name="unit" class="form-control" value="{{ $data->unit }}">
                            @if($errors->has('unit'))
                            <p class="text-danger">{{ $errors->first('unit') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Gram:</label>
                            <input type="number" name="gram" class="form-control" value="{{ $data->gram }}">
                            @if($errors->has('gram'))
                            <p class="text-danger">{{ $errors->first('gram') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Unit Price:</label>
                            <input type="text" name="unit_price" class="form-control" value="{{ $data->unit_price }}">
                            @if($errors->has('unit_price'))
                            <p class="text-danger">{{ $errors->first('unit_price') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Price:</label>
                            <input type="text" name="price" class="form-control" value="{{ $data->price }}">
                            @if($errors->has('price'))
                            <p class="text-danger">{{ $errors->first('price') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Amount:</label>
                            <input type="text" name="amount" class="form-control" value="{{ $data->amount }}">
                            @if($errors->has('amount'))
                            <p class="text-danger">{{ $errors->first('amount') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group m-0 mb-2">
                            <label for="">Cert No:</label>
                            <input type="text" name="cert_no" class="form-control" value="{{ $data->cert_no }}">
                            @if($errors->has('cert_no'))
                            <p class="text-danger">{{ $errors->first('cert_no') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group m-0 mb-2">
                            <label for="">Image:</label>
                            <input type="file" name="image" class="form-control">
                            @if($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <div class="alert alert-info">
                            <a target="_blank" href="{{ asset('lot_images/'.$data->image) }}" class="alert-link alert-sm">{{ asset('lot_images/'.$data->image) }}</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4 d-flex justify-content-end">
                        <a href="{{ route('admin.lots.index') }}" class="btn py-1" data-dismiss="modal">Close</a>
                        <button type="submit" formtarget="" class="btn btn-primary py-1">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
