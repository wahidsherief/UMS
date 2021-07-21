
@extends('users.teacher.layout')
@section('title',"Add Notice")
@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item " href="{{ route('teacher.notice') }}">Notices
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('teacher.addnotice') }}">Add Notice
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('teacher.my_notice',Auth::user()->id) }}">My Notice
                </a>
            </li>

        </ul>
    </nav>
@endsection
@section('content')
        <div class="container">
            <div class="row">
            <div class="col-md-10 " style="margin-top:10px">


            <div class="card">
                <div class="card-header bg-info text-warning">
                  <div class="">  Add Notification</div>
                </div>
                @error('notice_file')
                <span class="text-danger">{{ $message }} </span>
                @enderror

                <div class="card-body">
                    <div class="container">

                        <form action="{{route('insertNotice',['id' =>(Auth::user()->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter title" name="notice_title" value="{{old('notice_title', request()->notice_title) }}">
                          </div>
@error('notice_title')
<span class="text-danger">{{ $message }} </span>
@enderror

                          <div class="form-group">
                            <label for="title">Body</label>
                            <textarea class="form-control" id="post_body" name="notice_body" row="6" placeholder="Please type the notification"value="{{old('notice_body', request()->notice_body) }}">{{old('notice_body', request()->notice_body) }}</textarea>
                          </div>
                          @error('notice_body')
                          <span class="text-danger">{{ $message }} </span>
                          @enderror
                          <div class="form-group">
                            <label for="title">File(Optional)</label><br>
                            <input type="file" class="form-control" id="file" placeholder="attachment" name="notice_file" onchange="previewFile(this)">
                            <img id="previewimg" alt="Notice" style="max-width:150px;margin-top:20px"/>

                            @error('notice_file')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                      </div>
                </div>
            </div>
        </div>
        </div></div>
        <script>
       function previewFile(input){
        var file=$("input[type=file]").get(0).files[0];
        if(file){
            var reader=new FileReader();
            reader.onload=function(){
                $('#previewimg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
        </script>
    @if(Session::has('submitted'))
    <script>
        swal("Great News", "Notice has been submitted", "success");
    </script>
            @endif
@endsection
