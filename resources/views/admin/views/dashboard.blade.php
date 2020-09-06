@extends("admin.app")

@section('content')
    <div class="card">
        <div class="card-body">
            @include('notify::messages')
            Dashboard
        </div>
    </div>
@endsection
