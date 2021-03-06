<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/5b63wl8ybhi7rxkv3pz7vt60x9e2rdxx5drkqo3ou4c7mkuf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <link rel="stylesheet" href="{{ asset('css/ums.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}


        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ \URL::to('/admin/dashboard') }}" class="brand-link">
                <img src="{{ 'users/images/4271621914328_avatar.png' }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <div class="d-block" style="color:white;font-weight:bold">{{ Auth::user()->name }}</div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.add_session') }}" class="nav-link {{ request()->is('admin/notice') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Sessions</p>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Courses
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('add.course') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Course</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('course_data') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Course</p>
                                    </a>
                                </li>
                                {{-- Course type --}}
                                <li class="nav-item">
                                    <a href="{{ route('add.coursetype') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Course Type</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('coursetype_data') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Course Type</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('admin.assign_courses') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign Courses</p>
                                </a>
                        </li> --}}
                    </ul>
                    </li>




                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                New Accounts

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">


                            <li class="nav-item">
                                <a href="{{ route('admin.pending.student') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.pending.teacher') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teacher Profile</p>
                                </a>
                            </li>
                    </li>
                    </ul>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>LogOut</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="container">
                <section class="content">

                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <a class="small-box bg-info" href="{{ route('add.batch') }}">
                                <div class="inner">
                                    <h4>Batch</h4>

                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                            </a>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <a class="small-box bg-success" href="{{ route('add.semester') }}">
                                <div class="inner">
                                    <h4>Semester</h4>

                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                            </a>
                        </div>


                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <a class="small-box bg-warning" href="{{ route('add.course') }}">
                                <div class="inner">
                                    <h4>Courses</h4>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                            </a>
                        </div>



                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <a class="small-box bg-primary" href="{{route('admin.addnotice')}}">
                                <div class="inner">
                                    <h4>Notices</h4>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                            </a>
                        </div>

                    </div>

                </section>

                <div class="pt-4 pb-4">
                    @yield('nav_bar')
                </div>

                @yield('content')
            </div>

        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sizebar Content</p>
            </div>

        </aside>








        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        // $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.js') }}">
        < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" >
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#change_picture_btn', function() {
                $('#upload_profile_image').click();
            });


            $('#upload_profile_image').ijaboCropTool({
                preview: '.updated_picture',
                setRatio: 1,
                allowedExtensions: ['jpg', 'jpeg', 'png'],
                buttonsText: ['CROP', 'QUIT'],
                buttonsColor: ['#30bf7d', '#ee5155', -13],
                processUrl: '{{ route('
                adminPictureUpdate ') }}',
                withCSRF: ['_token', '{{ csrf_token() }}'],
                onSuccess: function(message, element, status) {
                    alert(message);
                },
                onError: function(message, element, status) {
                    alert(message);
                }
            });


        });
    </script>
    <script>
        tinymce.init({
            selector: '#post_body',

        })
    </script>

</body>

</html>