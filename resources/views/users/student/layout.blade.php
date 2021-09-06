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
                                        <img class="avatar rounded-circle" src="{{ Auth::user()->picture}}"
                                            alt="Bologna"/>
                                        <h4 class="card-title">{{ Auth::user()->name }}</h4><br>
                                        <h6 class="card-subtitle mb-2 text-muted">Student of CSE</h6>
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
                                            <li class="list-group-item"><a href="{{route('student.profile')}}"> My
                                                    Profile</a></li>
                                                <li class="list-group-item"><a href="{{route('student.profile')}}">
                                                        Settings</a></li>

                                            <li class="list-group-item">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"
                                                    class="nav-link">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
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
                                    <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box yellow-light-bg" href="{{ route('student.dashboard') }}">
                                            <div class="inner">
                                                <p>Dashboard</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-dashboard"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box cyan-light-bg"
                                            href="{{ route('student.notice') }}">
                                            <div class="inner">
                                                <p>Notice</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box blue-light-bg"
                                            href="{{ route('student.show_questions') }}">
                                            <div class="inner">
                                                <p>Question</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-book"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box red-light-bg" href="{{ route('result') }}">
                                            <div class="inner">
                                                <p>Result</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-bell"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- ./col -->
                                    {{-- <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box purple-light-bg"
                                            href="{{ route('admin.pending_accounts') }}">
                                            <div class="inner">
                                                <p>Examination</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-book-open"></i>
                                            </div>
                                        </a>
                                    </div> --}}

                                    <div class="col-2">
                                        <!-- small box -->
                                        <a class="small-box chocolate-light-bg"
                                            href="{{ route('student.coming_soon') }}">
                                            <div class="inner">
                                                <p>Events</p>

                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </section>


                            <section class="col-md-12 mt-4">
                                @if (\Request::is('student/dashboard'))
                                @yield('dashboard-content')
                                @else
                                <div class="card">
                                    @yield('nav_bar')
                                    @yield('content')
                                </div>
                                @endif
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>






















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
