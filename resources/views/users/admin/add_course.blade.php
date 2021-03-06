@extends('users.admin.layout')
@section('title',"course")

@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection


@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Add Course</h3>
    </div>

    <form action="{{route('add.course.submit')}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Semester</label>


                        <select class="form-control" name="semester_id">
                            @foreach($semesters as $semester)
                            <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                            @endforeach
                        </select></div>
                    @error('semester_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Type</label>
                        <select class="form-control" name="coursetype_id">
                            @foreach($coursetypes as $coursetype)
                            <option value="{{$coursetype->id}}">{{$coursetype->course_type}}</option>
                            @endforeach
                        </select>

                    </div>
                    @error('coursetype_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter course name"
                            name="course_name">
                    </div>
                    @error('course_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="exampleInputEmail1">Course Code</label>
                    <div class="form-group">
                        <select name="course_dropdown"
                            style="width:70px; padding:5px;border:1px solid silver;border-radius:3px; padding-bottom:8px;">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="HSC">HSC</option>
                            <option value="ENG">ENG</option>
                            <option value="EEE">MATH</option>
                            <option value="HSC">ME</option>
                            <option value="ENG">ACT</option>
                            <option value="ENG">PHY</option>
                            <option value="EEE">CHEM</option>
                            <option value="HSC">BUS</option>
                            <option value="ENG">HUM</option>
                        </select>
                        -
                        <input type="text" name="course_text" onKeyPress="if(this.value.length==3)return false;"
                            style="width:90px; padding:5px;border:1px solid silver;border-radius:3px;padding-bottom:8px;"
                            placeholder="123">


                    </div>
                    @error('course_dropdown')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('course_text')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Credit</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter course credit"
                            name="course_credit">
                    </div>
                    @error('course_credit')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="float-right">
                <button type="submit" class="ums-tiny-btn text-success"><i class="fa fa-check-circle"
                        aria-hidden="true"></i>
                    Save</button>
            </div>

    </form>

    @if(Session::has('course_created'))
    <script>
        swal("Course Created", "Course has been created successfully", "success");
    </script>
    @endif
</div>
@endsection
