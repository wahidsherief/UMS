<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <base href="{{ \URL::to('/')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <link rel="stylesheet" href="{{asset('plugins/ijaboCropTool/ijaboCropTool.min.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link rel="stylesheet" href="{{ asset('css/ums.css') }}">

    <style>
        .main-footer {
            display: none
        }

        hr.style5 {
            background-color: #fff;
            border-top: 2px dashed #8c8b8b;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ \URL::to('/student/dashboard')}}" class="brand-link">
                <img src="{{('users/images/20171621953200_avatar.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Student Account</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->picture}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <div class="d-block" style="color:white;font-weight:bold">{{Auth::user()->name}}</div>
                    </div>
                </div>

                @php $account_status=Auth::user()->account_status; @endphp
                <!-- Sidebar Menu -->
                <nav class="">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        @if($account_status==0)

                        <li class="nav-item">
                            <div class="nav-link active">
                                <i class="nav-icon fas "></i>
                                <p>
                                    Dashboard

                                </p>
                            </div>
                        </li>
                        @endif
                        @if($account_status==1)

                        <li class="nav-item">
                            <a href="{{route('student.profile')}}"
                                class="nav-link {{ (request()->is('student/dashboard'))?'active': ''}}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('student.profile')}}"
                                class="nav-link {{ (request()->is('student/profile'))?'active': ''}}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                 
                        <li class="nav-item">
                            <a href="{{route('student_password')}}"
                                class="nav-link {{ (request()->is('student/password'))?'active': ''}}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Password </p>
                            </a>
                        </li>

                        @endif
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
     <!-- Main content -->
     <div class="container">
        <section class="content">

            <div class="row">

                <!-- ./col -->


                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <a class="small-box bg-primary" href="{{route('student.notice')}}">
                        <div class="inner">
                            <h4>Notices</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                    </a>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <a class="small-box bg-warning" href="{{ route('student.show_questions') }}">
                        <div class="inner">
                            <h4>Question Bank</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <a class="small-box bg-success" href="{{ route('result') }}">
                        <div class="inner">
                            <h4>Result</h4>

                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                    </a>
                </div>
            </div>

        </section>

        <div class="pt-4 pb-4">
            @yield('nav_bar')
        </div>
    </div>

            @yield('content')



            <!-- /.content -->
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

    <script src="plugins/jquery-ui/jquery-ui.css"></script>
    <script src="plugins/jquery-ui/jquery-ui.theme.css"></script>
    <script src="plugins/jquery-ui/jquery-ui.structure.css"></script>


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
    <script src="{{asset('plugins/ijaboCropTool/ijaboCropTool.min.js')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>

    <script>
        $(document).ready(function() {


            $(document).on('click', '#change_picture_btn', function() {
                $('#upload_profile_image').click();
            });


            $('#upload_profile_image').ijaboCropTool({
                preview: '.updated_picture'
                , setRatio: 1
                , allowedExtensions: ['jpg', 'jpeg', 'png']
                , buttonsText: ['CROP', 'QUIT']
                , buttonsColor: ['#30bf7d', '#ee5155', -13]
                , processUrl: '{{ route("studentPictureUpdate") }}'
                , withCSRF: ['_token', '{{ csrf_token() }}']
                , onSuccess: function(message, element, status) {
                    alert(message);
                }
                , onError: function(message, element, status) {
                    alert(message);
                }
            });


        });

    </script>


</body>

</html>
