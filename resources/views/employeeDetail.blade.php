@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('content')
<body>
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Employee Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <!-- Profile Image -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee Detail</h3>
                <div class="btn-group btn-group-sm float-sm-right">
                    <button type="button" class="btn btn-success">Export Slip Gaji </button>
                  </div>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-user"></i></i> Name</strong>

                <p class="text-muted">
                  <?php echo$data->name; ?>
                </p>
                <hr>
                <strong><i class="fas fa-envelope"></i> Email</strong>
                <p class="text-muted">
                 <?php echo$data->email; ?>
                </p>

                <hr>

                <strong><i class="fas fa-money-bill-wave"></i> Salary</strong>

                <p class="text-muted"><?php echo$data->salary; ?></p>

                <hr>
                <strong><i class="fas fa-money-bill-wave"></i> Bonus</strong>
                <p class="text-muted"><?php echo$data->bonus; ?></p>
                <hr>

                <strong><i class="fas fa-cogs"></i> Role</strong>

                <p class="text-muted"> <?php echo$data->role; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="btn-group float-left">
              <form action="/employee/delete/<?php echo$data->id; ?>">
                <input class="btn btn-danger toastsDefaultDanger" type="submit" value="Delete" />
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
              <!-- /.card-body -->
      </div>
    </div>
    </section>
</body>
@endsection