



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



