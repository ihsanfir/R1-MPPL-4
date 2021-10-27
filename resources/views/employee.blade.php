<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IFISH | {{ $title }}</title>
    </head>
    <body>
        <h1>EMPLOYEE</h1>
        <table border = "1">
            <tr>
            <td>ID</td>
            <td>name</td>
            <td>email</td>
            <td>salary</td>
            <td>role</td>
            </tr>
            @foreach ($data as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->role }}</td>
                <td><a href = '/employee/{{ $employee->id }}'>Detail</a></td>
                <td><a href = '/employee/edit/{{ $employee->id }}'>Edit</a></td>
            </tr>
            @endforeach
    </table>
    </body>
</html> -->

@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('heading_1') EMPLOYEE @endsection
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employees</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
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
@endsection