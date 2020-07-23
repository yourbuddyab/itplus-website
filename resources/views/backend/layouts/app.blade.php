<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IT PLUS</title>
  <link rel = "icon" href ="{{URL::asset('/assets/image/backlogo/favicon.png')}}" type = "image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{URL::asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{URL::asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <script src="{{URL::asset('/ckeditor/ckeditor.js')}}"></script>
  <script src="{{URL::asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{route('logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
          {{-- <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 @include('backend.layouts.left-sidebar')
  <div class="content-wrapper">

    @yield('content')
 </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://www.itplus.in/" target="_blank">IT Plus</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{URL::asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="{{URL::asset('plugins/chart.js/Chart.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/sparklines/sparkline.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
<script src="{{URL::asset('/plugins/moment/moment.min.js')}}"></script>
{{-- <script src="{{URL::asset('plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
<script src="{{URL::asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{URL::asset('/dist/js/adminlte.js')}}"></script>
{{-- <script src="{{URL::asset('dist/js/pages/dashboard.js')}}"></script> --}}
<script src="{{URL::asset('/dist/js/demo.js')}}"></script>
<script src="{{URL::asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>
</html>
