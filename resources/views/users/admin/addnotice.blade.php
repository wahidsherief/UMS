@extends('users.admin.layout')
@section('title',"Admin profile")
@section('content')
<div class="container">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Notice</h3>
    </div>
    <div class="card-body">
      @if(Session::has('submitted'))
      <div class="alert alert-success" role='alert'>
        {{Session::get('submitted')}}

      </div>
      @endif

      <form action="{{route('admin_insertNotice',['id' =>(Auth::user()->id)])}}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="email" placeholder="Enter title" name="notice_title">
        </div>
        <div class="form-group">
          <label for="title">Body</label>
          <textarea class="form-control" id="post_body" name="notice_body" row="6"
            placeholder="Please type the notification"></textarea>
        </div>

        <div class="form-group">
          <label for="title">File(Optional)</label><br>
          <input type="file" class="form-control" id="file" placeholder="attachment" name="notice_file"
            onchange="previewFile(this)">
          <img id="previewimg" alt="Notice" style="max-width:150px;margin-top:20px" /> </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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

@endsection
