<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/fullcalendar/main.css')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('vendors/dist/img/logo-ifish.png')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <!-- <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link">
          <i class="fas fa-sign-out-alt"></i>Logout
          </button>
        </form> -->
        <a class="nav-link" href="{{ route('logout') }}" role="button"><i
            class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('vendors/dist/img/logo-ifish-3.png')}}" alt="Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('vendors/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview @yield('open_das')">
            <a href="{{url('/')}}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview @yield('open_emp')">
            <a href="#" class="nav-link @yield('employee')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{url('/employee')}}" class="nav-link  @yield('employee_li')" style="padding-left: 32px;">
                  <i class="fas fa-bars nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/employee/add')}}" class="nav-link  @yield('employee_add')" style="padding-left: 32px;">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>              
            </ul>
          </li>
<!-- Category -->
          <li class="nav-item has-treeview @yield('open_cat')">
            <a href="#" class="nav-link @yield('categories')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/category')}}" class="nav-link @yield('categories_li')" style="padding-left: 32px;">
                  <i class="fas fa-bars nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/category/add')}}" class="nav-link @yield('categories_add')" style="padding-left: 32px;">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>              
            </ul>
          </li>
<!-- Supllier -->
          <li class="nav-item has-treeview @yield('open_sup')">
            <a href="#" class="nav-link @yield('supplier')">
              <i class="nav-icon fas fa-dolly"></i>
              <p>
                Suppliers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/supplier')}}" class="nav-link @yield('supplier_li')" style="padding-left: 32px;">
                  <i class="fas fa-bars nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/supplier/add')}}" class="nav-link @yield('supplier_add')" style="padding-left: 32px;">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>              
            </ul>
          </li>
<!-- Product -->
<li class="nav-item has-treeview @yield('open_pro')">
            <a href="#" class="nav-link @yield('product')">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link @yield('product_li')" style="padding-left: 32px;">
                  <i class="fas fa-bars nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product/add')}}" class="nav-link @yield('product_add')" style="padding-left: 32px;">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 iFish.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('vendors/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendors/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('vendors/dist/js/demo.js')}}"></script>
<script src="{{asset('vendors/dist/js/pages/dashboard.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- ChartJS -->
<script src="{{asset('vendors/plugins/chart.js/Chart.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('vendors/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendors/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- jQuery Mapael -->
<script src="{{asset('vendors/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('vendors/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendors/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('vendors/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('vendors/plugins/sparklines/sparkline.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('vendors/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('vendors/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('vendors/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendors/plugins/fullcalendar/main.js')}}"></script>


<!-- PAGE SCRIPTS -->
@yield('script')
</body>
</html>
