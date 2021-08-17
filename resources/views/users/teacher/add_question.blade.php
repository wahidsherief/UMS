@extends('users.teacher.layout')
@section('title',"My Batch")

@section('nav_bar')
@include('users.teacher.top_nav.question_without_search')
@endsection

@section('content')
<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Add Question</h3>
    </div>
    <div class="row ums-content-heading mt-4">
        <div class="col-12">
            <form action="{{ route('upload_question_submit',[$session_id,$course_id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body table-responsive p-0">



                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Question Type</label>

                        <select class="form-control form-control-sm" name="question_type">

                            <option disabled selected>Select Question Type</option>

                            <option value="Class Test">Class Test</option>
                            <option value="Part A">Part A</option>
                            <option value="Part B">Part B</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Select Question Category</label>

                        <select class="form-control form-control-sm" name="question_category">
                            <option disabled selected>Select Question Category</option>
                            <option value="1">main Exam</option>
                            <option value="2">Backlog Exam</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="title">Question(PDF)</label><br>
                        <input type="file" class="form-control-file" id="file" placeholder="attachment"
                            name="question_file">


                    </div>



                    <div align="right">
                        <button type="submit" class="btn btn-sm btn-success mt-1"><i class="fa fa-check-circle"
                                aria-hidden="true"></i>
                            Save</button>
                    </div>
                </div>
            </form>

            @if(Session::has('batch_created'))
            <script>
                swal("Success", "Batch has been added successfully", "success");
            </script>
            @endif

            @if(Session::has('batch_updated'))
            <script>
                swal("Updated", "Batch has been Updated successfully", "success");
            </script>
            @endif
            @if(Session::has('batch_deleted'))
            <script>
                swal("Deleted", "Batch has been Deleted successfully", "error");
            </script>
            @endif
        </div>
    </div>
</div>
@endsection