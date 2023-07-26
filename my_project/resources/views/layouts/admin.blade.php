<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body>
    <div class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @guest
            @else
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Admin Name -->
                        <li class="nav-item pr-3">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        Logout</a>
                                </form>

                        </li>


                    </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="index3.html" class="brand-link">
                        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}}
                            {{-- style="opacity: .8"> --}}

                        <strong class="brand-text pl-5">Admin Panel</strong>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <li class="nav-item menu-open">
                                    <a href="" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard</p>
                                    </a>

                                </li>
                                {{-- Designation start here --}}
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <p class="pl-2">Designations</p>
                                    </a>
                                </li>
                                {{-- Designation ends here --}}

                                {{-- our team start here --}}
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <p class="pl-2">Teams</p>
                                    </a>
                                </li>
                                {{-- our team ends here --}}
                                {{-- Clients start here --}}
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <p class="pl-2">Our Client</p>
                                    </a>

                                </li>
                                {{-- Client ends here --}}
                                {{-- services menu start here --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link pl-2">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>
                                            Services
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/charts/chartjs.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Service Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Service</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 {{-- servises menu ends here --}}
                                {{-- orders menu start here --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link pl-2">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>
                                            Orders
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/charts/chartjs.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pending Order</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Confirmed Order</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Order Delivered</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 {{-- orders menu ends here --}}
                                {{-- Reporting start here --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        <p class="pl-2">
                                            Reports
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/charts/chartjs.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pending Order</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Confirmed Order</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Order Delivered</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 {{-- Reporting ends here --}}
                                 {{-- table menu start here --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link pl-2">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Tables
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/tables/simple.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Simple Tables</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/tables/data.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>DataTables</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>jsGrid</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- table menu ends here --}}
                                <li class="nav-header">LABELS</li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p class="text">Important</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Warning</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Informational</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
            @endguest
            <!-- Content Wrapper. Contains page content -->

            <!-- /.content-wrapper -->

            @yield('admin_content')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('backend/dist/js/demo.js') }}dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
