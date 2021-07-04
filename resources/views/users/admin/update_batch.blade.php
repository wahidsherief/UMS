@extends('users.admin.layout')
@section('title',"Update Batch")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Update Batch</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- form start -->
          <form action="" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Batch Name</label>
                <input type="text" class="form-control" id="text" placeholder="Enter Batch Name" name="batch_name" value="{{$batches->batch_name}}">
              </div>

              <div class="form-group">
                <select class="form-control" name="semester_id">

                    <label for="exampleInputEmail1">Select Semester</label>

                    <option value="{{ $batches->semester->id }}">{{ $batches->semester->semester_name }}
                    </option>
                    @foreach($semesters as $semester)
                    <option value="{{ $semester->id }}">{{ $semester->semester_name }}
                    </option>
                    @endforeach
                </select>
            </div>
              <div class="form-group">
                <select class="form-control" name="batch_advisor">

                    <label for="exampleInputEmail1">Select Batch Advisor</label>

                    <option value="{{ $batches->teacher->id }}">{{ $batches->teacher->teachers_short_name }}
                    </option>
                    @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->teachers_short_name }}
                    </option>
                    @endforeach
                </select>
            </div>
              <div align="right">
                <button type="submit" class="btn btn-warning"><i class="fa fa-check-circle" aria-hidden="true"></i>
                  Update Data</button>
              </div>
            </div>
          </form>

          @if(Session::has('batch_created'))
            <script>
                swal("Success", "Batch has been added successfully", "success");
              </script>
          @endif
        </div>
      </div>
    </div>


    @endsection
