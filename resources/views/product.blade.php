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
                        <th>price</th>
                        <th>stock</th>
                        <th>supplier</th>
                        <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($data as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->supplier }}</td>
        <td>{{ $product->category }}</td>
        <td><a href = '/product/edit/{{ $product->id }}'>Edit</a></td>
        <td><a href = '/product/delete/{{ $product->id }}'>Delete</a></td>
    </tr>
    @endforeach
</body>
@endsection