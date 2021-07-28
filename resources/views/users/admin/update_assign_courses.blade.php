@extends('users.admin.layout')
@section('title',"Batch Activities")
@section('content')
<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
    <div class="tab-content">
      <div class="tab-pane active" id="activity">
        <!-- Post -->

        <form action="" method="POST">
            @csrf


              <div class="card-header">
             <div class="card-title"> Update Activities</div></div>
              </div>
           
            <div class="card-body">
            <div class="row">

            <div class="col">

            <select class="form-control" name="course_id">
                @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->course_code}}</option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <select class="form-control" name="internal">
                <label for=""> Teacher Internal</label>
<option value="{{$teacher_internal->id}}"> {{$teacher_internal->teachers_short_name}}</option>
                @foreach($teachers as $teacher)

                <option value="{{$teacher->id}}">{{$teacher->teachers_short_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-control" name="external">
                <label for=""> Teacher External</label>
                <option value="{{$teacher_external->id}}"> {{$teacher_external->teachers_short_name}}</option>
                @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->teachers_short_name}}</option>
                @endforeach
            </select>
        </div>
          </div>

          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        </form>
    </div>



    </div></div></div>
    @endsection
