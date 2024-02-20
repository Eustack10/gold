@extends('main')
@section('content')
    
    <div class="container card">
    <h1 class="mb-5">Gem</h1>
        <div class="mb-4 d-flex justify-content-end">
            <a class="btn btn-primary py-1" href="{{ route('jellewery.create') }}">+ Create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Img</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3214</td>
                        <td>
                            <img width="50px" src="{{ asset('assets/img/theme/sketch.jpg') }}" alt="">
                        </td>
                        <td>32 Gold</td>
                        <td>20000</td>
                        <td>
                            <a href="{{ route('weight', 1) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('weight', 1) }}" class="btn btn-primary btn-sm">Setup</a>
                            <a href="" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>9876</td>
                        <td>
                            <img width="50px" src="{{ asset('assets/img/theme/sketch.jpg') }}" alt="">
                        </td>
                        <td>65 Gold</td>
                        <td>60000</td>
                        <td>
                            <a href="{{ route('weight', 1) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('weight', 1) }}" class="btn btn-primary btn-sm">Setup</a>
                            <a href="" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </thead>
        </table>

    </div>
@endsection