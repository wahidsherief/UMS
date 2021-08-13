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
    <script src="https://cdn.tiny.cloud/1/5b63wl8ybhi7rxkv3pz7vt60x9e2rdxx5drkqo3ou4c7mkuf/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{ asset('css/ums.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    {{-- For Mobile Menu --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-md-none">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>
    </nav>

    {{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ \URL::to('/teacher/dashboard')}}" class="brand-link">
    <img src="{{('users/images/4271621914328_avatar.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Teacher Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->picture}}" class="img-circle elevation-2" alt="T">
            </div>
            <div class="info">
                <div class="d-block" style="color:white;font-weight:bold">{{Auth::user()->name}}</div>
            </div>
        </div>


        @php $account_status=Auth::user()->account_status;
        @endphp
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



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
                    <a href="{{route('teacher.profile')}}"
                        class="nav-link {{ (request()->is('teacher/profile'))?'active': ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('courses.all_students',1) }}"
                        class="nav-link {{ (request()->is('teacher/students'))?'active': ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>All Students</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('password') }}"
                        class="nav-link {{ (request()->is('teacher/password'))?'active': ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Password</p>
                    </a>
                </li>



                @endif





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside> --}}
    <div class="ums-content-wrapper container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-sm-12">
                <div class="container">
                    <div class="row">
                        <aside class='ums-fixed-sidebar col-md-3 col-sm-12 sticky-top'>
                            <div class="container">
                                <div class="card">
                                    <img class="card-img-top"
                                        src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/oslo.jpg"
                                        alt="Bologna">
                                    <div class="card-body text-center p-4">
                                        <img class="avatar rounded-circle"
                                            src="{{ Auth::user()->picture}}"
                                            alt="Bologna">
                                        <h4 class="card-title">{{ Auth::user()->name }}.</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Famous Actor</h6>
                                        <p class="card-text">Robert John Downey Jr.'career has included critical and
                                            popular success in his youth.
                                        </p>
                                        <div class="profile-social-icon">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-researchgate"></i></a>
                                            <a href="#"><i class="fab fa-github"></i></a>
                                            <a href="#"><i class="fab fa-stack-overflow"></i></a>
                                            <a href="#"><i class="fas fa-globe"></i></i></a>
                                        </div>
                                        <ul class="list-group list-group-flush mt-3">
                                            <li class="list-group-item"><a href="{{route('teacher.profile')}}"> My Profile</a></li>

                                            <li class="list-group-item">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();" class="nav-link">
                          Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>

                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <section class="col-md-9 col-sm-12">
                            <section class="col-12 fixed-uppper-content">
                                <div class="row">
                                    <div class="col-3">
                                        <!-- small box -->
                                        <a class="small-box cyan-light-bg"
                                            href="{{ route('MyBatchController.students') }}">
                                            <div class="inner">
                                                <p>My Batch</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-3">
                                        <!-- small box -->
                                        <a class="small-box blue-light-bg"
                                            href="{{ route('teacher.my_courses_internal') }}">
                                            <div class="inner">
                                                <p>Examination</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-book"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-3">
                                        <!-- small box -->
                                        <a class="small-box red-light-bg" href="{{route('teacher.notice')}}">
                                            <div class="inner">
                                                <p>Notices</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-bell"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-3">
                                        <!-- small box -->
                                        <a class="small-box purple-light-bg"
                                            href="{{ route('teacher.show_questions') }}">
                                            <div class="inner">
                                                <p>Questions</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-book-open"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </section>


                            <section class="col-md-12 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        @yield('nav_bar')
                                        @yield('content')
                                    </div>
                                </div>

                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
            , processUrl: '{{ route("teacherPictureUpdate") }}'
            , withCSRF: ['_token', '{{ csrf_token() }}']
            , onSuccess: function(message, element, status) {
                alert(message);
                window.location.reload(); 
            }
            , onError: function(message, element, status) {
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
