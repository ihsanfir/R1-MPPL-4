@extends('master')
@section('title') IFISH | {{ $title }} @endsection

@section('categories') active @endsection
@section('categories_li') active @endsection

@section('open_cat') menu-open @endsection

@section('content')
<body>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($data as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td><a href = '/category/edit/{{ $category->id }}'>Edit</a></td>
        <td><a href = '/category/delete/{{ $category->id }}'>Delete</a></td>
    </tr>
    @endforeach
</body>
@endsection