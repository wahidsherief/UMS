
@extends('users.teacher.layout')
@section('title',"Add Notice")

@section('nav_bar')
@include('users.teacher.top_nav.notice')
@endsection

@section('content')
        <div class="container">

                @error('notice_file')
                <span class="text-danger">{{ $message }} </span>
                @enderror

                <div class="card-body">

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
                            <textarea class="form-control" id="post_body" name="notice_body"  placeholder="Please type the notification"value="{{old('notice_body', request()->notice_body) }}">{{old('notice_body', request()->notice_body) }}</textarea>
                          </div>
                          @error('notice_body')
                          <span class="text-danger">{{ $message }} </span>
                          @enderror
                          <div class="form-group">
                            <label for="title">File(Optional)</label><br>
                            <input type="file" class="form-control" id="file" placeholder="attachment" name="notice_file" onchange="previewFile(this)">
                            <img id="previewimg" alt="Notice" style="max-width:250px;margin-top:20px"/>

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
        <script>tinymce.init({
            selector: 'textarea',
            height: 400
         });</script>
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
