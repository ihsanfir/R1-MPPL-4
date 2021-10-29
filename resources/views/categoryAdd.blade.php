@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('content')
<body>
    <form action = "/category/store" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type = 'text' name = 'name' class="form-control" value = ''/>
              </div>
              <div class="btn-group float-right">
                <input type="submit" value="Save Changes" class="btn btn-success toastsDefaultSuccess">
                <a href="#" class="btn btn-danger toastsDefaultDanger">Cancel</a>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </div>
</body>
@endsection