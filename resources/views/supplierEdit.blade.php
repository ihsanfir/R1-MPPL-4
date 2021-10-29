@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('content')
<body>
    <form action = "/supplier/edit/<?php echo$data->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Supplier</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type = 'text' name = 'name' class="form-control" value = '<?php echo$data->name; ?>'/>
              </div>
              <div class="form-group">
                <label for="no_hp">No Handphone</label>
                <input type = 'text' name = 'no_hp' class="form-control" value = '<?php echo$data->no_hp; ?>'/>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type = 'text' name = 'email' class="form-control" value = '<?php echo$data->email; ?>'/>
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