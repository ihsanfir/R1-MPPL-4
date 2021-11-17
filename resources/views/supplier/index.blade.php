@extends('master')
@section('title') IFISH | {{ $title }} @endsection

@section('supplier') active @endsection
@section('supplier_li') active @endsection

@section('open_sup') menu-open @endsection

@section('content')
<body>
<section class="content-header">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Suppliers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Suppliers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Suppliers</h3>
                <div class="card-tools">
                  <form action="/supplier/search" method="GET">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ old('search') }}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default mr-1"><i class="fas fa-search"></i></button>
                        <div class="btn-group btn-group-sm">
                          <button type="button" class="btn btn-success">Export</button>
                          <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{ route('pdf-supplier') }}">Export to Pdf</a>
                            <a class="dropdown-item" href="{{ route('excel-supplier') }}">Export to Excel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
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
                            <td><a href = '/supplier/edit/{{ $supplier->id }}' class="btn btn-block btn-warning btn-sm">Edit</a></td>
                            <td><a href = '/supplier/delete/{{ $supplier->id }}' class="btn btn-block btn-danger btn-sm">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>                   
</body>
{{ $data->links() }}
@endsection