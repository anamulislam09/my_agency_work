<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
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
                <a href="{{ route('admin.home') }}" class="d-block"> {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.home') }}" class="nav-link active">
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
                            <a href="{{ route('category.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subcategory.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service SubCategory</p>
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
