@extends('main')
@section('content')
<div class="container-fluid" id="root">

</div>
@endsection

@section('scripts')
<script>
    const blade_gold = @json($gold);
    const categories = @json($categories);
    const product_types = @json($product_types);
    const colors = @json($colors);
    const brands = @json($brands);
    const gems = @json($gems);
</script>
@vite("resources/js/Weight.jsx")
{{-- for weight lot datatable --}}
<script>
    $(function(){
        $('#examplee').DataTable( {searching: false, paging: false, info: false, responsive: true} );
    });
</script>
@endsection