
@extends('users.teacher.layout')
@section('title',"teacher profile")
@section('content')
        <div class="container">
            <div class="col-md-9" style="margin-top:50px">


            <div class="card">
                <div class="card-header alert alert-primary">
                    Add Notification
                </div>
                @error('notice_file')
                <span class="text-danger">{{ $message }} </span>
                @enderror

                <div class="card-body">
                    <div class="container">

                        <form action="{{route('insertNotice',['id' =>(Auth::user()->id)])}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter title" name="notice_title">
                          </div>
@error('notice_title')
<span class="text-danger">{{ $message }} </span>
@enderror

                          <div class="form-group">
                            <label for="title">Body</label>
                            <textarea class="form-control" id="post_body" name="notice_body" row="6" placeholder="Please type the notification"></textarea>
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
        </div>
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
