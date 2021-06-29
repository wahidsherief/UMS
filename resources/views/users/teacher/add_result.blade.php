
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
<form action="{{route('submit.result') }}" method="POST"  enctype="multipart/form-data">
 @csrf
 <label for="exampleInputEmail1">Class Test / Assignment</label>
                <div class="row">
                        <div class="col">
                     <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="CT-1" name="classtest_1">
                          </div>
                        </div>

            <div class="col">
                            <div class="form-group">
                     <input type="text" class="form-control" id="email" placeholder="CT-2" name="classtest_2">
                                 </div>
                               </div>
              <div class="col">
                                <div class="form-group">
                         <input type="text" class="form-control" id="email" placeholder="CT-3" name="classtest_3">
                                     </div>
                                   </div>
                <div class="col">
                                    <div class="form-group">
                             <input type="text" class="form-control" id="email" placeholder="CT-4" name="classtest_4">
                                         </div>
                                       </div>

                    </div>
                 {{-- Attandance --}}

                 <label for="exampleInputEmail1">Attendance</label>
                 <div class="row">
                    <div class="col">
                 <div class="form-group">
          <input type="text" class="form-control" id="email" placeholder="Attendance Number" name="attandance">
                      </div>
                    </div>
                </div>

    <label for="exampleInputEmail1">Final Exam PartA PartB</label>
<div class="row">

        <div class="col">
                        <div class="form-group">
                 <input type="text" class="form-control" id="email" placeholder="Part A" name="part_a">
                             </div>
                           </div>
          <div class="col">
                            <div class="form-group">
                     <input type="text" class="form-control" id="email" placeholder="Part B" name="part_b">
                                 </div>
                               </div>
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                      Save</button>
                  </div></div>
                        </form>

                      </div></div>

        @if(Session::has('result_created'))
        <div class="alert alert-success" role='alert'>

        {{Session::get('result_created')}}

        </div></div></div></div>
                @endif
@endsection
