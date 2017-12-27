
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AmuJamu Tools</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/select2.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/jquery-ui.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/bootstrap3-wysihtml5.min.css')}}">
  {!! Charts::styles() !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AmuJamu Tools</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('/resources/assets/img/user.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Super Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('/resources/assets/img/user.png')}}" class="img-circle" alt="User Image">

                <p>
                  Super Admin
                  <small>Member since Dec. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ URL::route('Dashboard.login') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/resources/assets/img/user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Super Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tachometer"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::route('Dashboard.index') }}"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book"></i>
            <span>Manual Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::route('manual_bookings.manual_booking.index') }}"><i class="fa fa-circle-o"></i> Booking List</a></li>
            <li><a href="{{ URL::route('manual_bookings.manual_booking.create') }}"><i class="fa fa-circle-o"></i> Add New Booking</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('/resources/assets/doc_file/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/resources/assets/doc_file/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/resources/assets/doc_file/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('/resources/assets/doc_file/raphael.min.js')}}"></script>
<script src="{{ asset('/resources/assets/doc_file/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('/resources/assets/doc_file/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('/resources/assets/doc_file/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('/resources/assets/doc_file/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/resources/assets/doc_file/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/resources/assets/doc_file/moment.min.js')}}"></script>
<script src="{{ asset('/resources/assets/doc_file/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('/resources/assets/doc_file/jquery-ui.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/resources/assets/doc_file/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/resources/assets/doc_file/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/resources/assets/doc_file/fastclick.js')}}"></script>
<script src="{{ asset('/resources/assets/doc_file/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/resources/assets/doc_file/select2.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/resources/assets/doc_file/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/resources/assets/doc_file/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/resources/assets/doc_file/custom.js')}}"></script>
</body>
</html>
