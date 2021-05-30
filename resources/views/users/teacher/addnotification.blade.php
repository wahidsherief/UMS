
@extends('users.teacher.layout')
@section('title',"teacher profile")
@section('content')
        <div class="container">
            <div class="col-md-9" style="margin-top:50px">


            <div class="card">
                <div class="card-header alert alert-primary">
                    Add Notification
                </div>
                @if(Session::has('submitted'))
        <div class="alert alert-success" role='alert'>

        {{Session::get('submitted')}}

        </div>
                @endif
                <div class="card-body">
                    <div class="container">

                        <form action="{{route('insertNotification')}}" method="POST">
                            @csrf
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter title" name="title">
                          </div>
                          <div class="form-group">
                            <label for="title">Body</label>
                            <textarea class="form-control" id="post_body" name="post_body" row="6" placeholder="Please type the notification"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="title">File(Optional)</label><br>
                            <input type="file" name="notification_file" id="" />
                          </div>



                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
        </div>


@endsection
