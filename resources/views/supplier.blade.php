@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('content')
<body>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>No Handphone</th>
                        <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($data as $supplier)
    <tr>
        <td>{{ $supplier->id }}</td>
        <td>{{ $supplier->name }}</td>
        <td>{{ $supplier->no_hp }}</td>
        <td>{{ $supplier->email }}</td>
        <td><a href = '/supplier/edit/{{ $supplier->id }}'>Edit</a></td>
        <td><a href = '/supplier/delete/{{ $supplier->id }}'>Delete</a></td>
    </tr>
    @endforeach
</body>
@endsection