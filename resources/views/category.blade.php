@extends('master')
@section('title') IFISH | {{ $title }} @endsection

@section('categories') active @endsection
@section('categories_li') active @endsection

@section('open_cat') menu-open @endsection

@section('content')
<body>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <div class="card-tools">
                  <form action="/employee/search" method="GET">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ old('search') }}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default mr-1"><i class="fas fa-search"></i></button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
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