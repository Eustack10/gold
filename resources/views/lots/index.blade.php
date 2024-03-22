@extends('main')
@section('content')
    
    <div class="container">
    <h1 class="mb-5">Lots</h1>
        <div class="mb-4 d-flex justify-content-end">
            <a class="btn btn-primary py-1" href="{{ route('admin.lots.create') }}">+ Create</a>
        </div>
        @include('lots.delete')
        <table class="table" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gem</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Unit</th>
                    <th>Gram</th>
                    <th>Unit Price</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Cert No</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach ($data as $index=>$d)
                        
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="d-flex flex-column">
                                {{ $d->gems->name }}
                        </td>
                        <td>{{ $d->code }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->weight }}</td>
                        <td>{{ $d->unit }}</td>
                        <td>{{ $d->gram }}</td>
                        <td>{{ $d->unit_price }}</td>
                        <td>{{ $d->price }}</td>
                        <td>{{ $d->amount }}</td>
                        <td>{{ $d->cert_no }}</td>
                        <td>
                            <img src="{{ asset('lot_images/'.$d->image) }}" alt="" width="50px">
                        </td>
                        <td>
                            <a href="{{ route('admin.lots.edit', $d->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <button onclick="deletelots({{$d->id}})" class="btn btn-sm btn-dark text-light">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>

    </div>
@endsection
@section('scripts')
    <script>
        $('#example').DataTable( {
        responsive: true
    } );
    </script>
    <script>
        function deletelots(id){
            $('#delete').modal('show');
            let delForm = document.querySelector('#delForm');
            delForm.action = `{{ route('admin.lots.index') }}/${id}`;
        }
    </script>

    
@endsection
