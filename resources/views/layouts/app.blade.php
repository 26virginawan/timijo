<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="toggled">


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TIM IJO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="{{Route('dashboard')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Dashboard</span>

                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @if(auth()->user()->role == 'admin')
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item {{ request()->is('user') ? 'active' : ''}}">
                <a class="nav-link" href="{{Route('user')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Data User</span>

                </a>
            </li> -->
            @endif
            <li class="nav-item {{ request()->is('tugas','area') ? 'active' : ''}}">
                <a class="nav-link" href="{{Route('area.index')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>TIM IJO</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('') ? 'active' : ''}}">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>DRIVER</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('zonaOB') ? 'active' : ''}}">
                <a class="nav-link" href="{{Route('zonaOB.index')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>OB</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        
                        <span class="text-dark"></span>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Abdul Basith</span>
                                <img class="img-profile rounded-circle"
                                    src="sbadmin2/img/pp.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <i class="fas fa-fw fa-sign-out-alt mr-2"></i>
                                        <button type="submit">Logout</button>
                                    </form>
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>


                    </ul>


                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">{{$tittle}}</h1>

                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->



    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin2/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin2/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin2/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sbadmin2/js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin2/js/demo/datatables-demo.js')}}"></script>

</body>

</html>