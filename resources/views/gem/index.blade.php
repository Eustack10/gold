@extends('main')
@section('content')
    
    <div class="container">
    <h1 class="mb-5">Gem</h1>
        <div class="mb-4 d-flex justify-content-end">
            <a class="btn btn-primary py-1" href="{{ route('admin.gem.create') }}">+ Create</a>
        </div>
        @include('gem.delete')
        <table class="table" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Unit Price</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach ($data as $index=>$d)
                        
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $d->code }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->unit }}</td>
                        <td>{{ $d->unit_price }}</td>
                        <td>
                            <a href="{{ route('admin.gem.edit', $d->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <button onclick="deleteGem({{$d->id}})" class="btn btn-sm btn-dark text-light">Delete</button>
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
        function deleteGem(id){
            $('#delete').modal('show');
            let delForm = document.querySelector('#delForm');
            delForm.action = `{{ route('admin.gem.index') }}/${id}`;
        }
    </script>

    
@endsection
