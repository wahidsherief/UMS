@extends('users.admin.layout')
@section('title',"course")

@section('content')

<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Add Course</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form action="{{route('add.course.submit')}}" method="POST">
            @csrf
            <div class="card-body">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>

                    <select class="form-control" name="department_id">
                      @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->department_name}}</option>
                      @endforeach
                    </select>

                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Semester</label>


                    <select class="form-control" name="semester_id">
                      @foreach($semesters as $semester)
                      <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                      @endforeach
                    </select></div>
                </div>
              </div>
              <div class="row">
                <div class="col">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter course name"
                      name="course_name">
                  </div>
                </div>
                <div class="col">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Code</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter course Code"
                      name="course_code">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Credit</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter course credit"
                      name="course_credit">
                  </div>
                </div>
                <div class="col-sm-12" align="right">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    Save</button>
                </div>
              </div>
          </form>

          @if(Session::has('course_created'))
          <div class="alert alert-success" role='alert'>

            {{Session::get('course_created')}}

          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection