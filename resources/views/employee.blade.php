@extends('master')
@section('title') IFISH | {{ $title }} @endsection

@section('employee') active @endsection
@section('employee_li') active @endsection

@section('open_emp') menu-open @endsection

@section('content')
<body>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee</h3>
                <div class="card-tools">
                  <form action="/employee/search" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ old('search') }}">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
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
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Bonus</th>
                        <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>{{ $employee->bonus }}</td>
                            <td>{{ $employee->role }}</td>
                            <td><a href = '/employee/{{ $employee->id }}'>Detail</a></td>
                            <td><a href = '/employee/edit/{{ $employee->id }}'>Edit</a></td>
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