@extends('main')
@section('content')
    
    <div class="container">
    <h1 class="mb-5">Goldsmith</h1>
        <div class="mb-4 d-flex justify-content-end">
            <a class="btn btn-primary py-1" href="{{ route('admin.goldsmith.create') }}">+ Create</a>
        </div>
        @include('goldsmith.delete')
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>ABBR</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach ($data as $index=>$d)
                        
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $d->code }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->abbr }}</td>
                        <td>
                            <a href="{{ route('admin.goldsmith.edit', $d->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <button onclick="deleteGoldsmith({{$d->id}})" class="btn btn-sm btn-dark text-light">Delete</button>
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
        function deleteGoldsmith(id){
            $('#delete').modal('show');
            let delForm = document.querySelector('#delForm');
            delForm.action = `{{ route('admin.goldsmith.index') }}/${id}`;
        }
    </script>
@endsection
