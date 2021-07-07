@extends('users.teacher.layout')
@section('title',"Result")
@section('content')


<div class="container">
    <div class="card card-secondary">

        <div class="card-header">
            <h3 class="card-title">Add Result</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{route('submit.result',[$session_id,$student->id,$semester->id,$course->id,$course->course_credit]) }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col">

                                <label for="exampleInputEmail1">Class Test (Marks)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Marks Range:0-60" name="class_test">
                                </div>
                            </div>



                            {{-- Attandance --}}

                            <div class="col">
                                <label for="exampleInputEmail1">Attendance (Marks)</label>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Marks Range: 0-30" name="attendance">
                                </div>
                            </div>
                        </div>

                        <label for="exampleInputEmail1">Final Exam (Marks)</label>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Part A" name="part_a">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Part B" name="part_b">
                                </div>
                            </div>
                        </div>
                        <div align="right">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                                Save</button>
                        </div>
                </div>
                </form>

            </div>
        </div>

        @if(Session::has('result_created'))
        <script>
            swal("Success", "Result has been Updated successfully", "success");

        </script>

    </div>
</div>
</div>
</div>
@endif
@endsection
