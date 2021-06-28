
@extends('users.teacher.layout')
@section('title',"Result")
@section('content')
        <div class="container">
            <div class="col-md-9" style="margin-top:50px">


            <div class="card">
                <div class="card-header alert alert-primary">
                 Add Result
                </div>
                @if(Session::has('result_created'))
        <div class="alert alert-success" role='alert'>

        {{Session::get('result_created')}}

        </div>
                @endif
                <div class="card-body">
                    <div class="container">

                        <form action="" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <Section for="title">Class Test</section>
                <div class="row">
                        <div class="col">
                     <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Enter title" name="classtest_1">
                          </div>
                        </div>

            <div class="col">
                            <div class="form-group">
                     <input type="text" class="form-control" id="email" placeholder="Enter title" name="classtest_2">
                                 </div>
                               </div>
              <div class="col">
                                <div class="form-group">
                         <input type="text" class="form-control" id="email" placeholder="Enter title" name="classtest_3">
                                     </div>
                                   </div>
                <div class="col">
                                    <div class="form-group">
                             <input type="text" class="form-control" id="email" placeholder="Enter title" name="classtest_4">
                                         </div>
                                       </div>

                    </div>
                 {{-- Attandance --}}

                 <Section for="title">Attendance Test</section>
                 <div class="row">
                    <div class="col">
                 <div class="form-group">
          <input type="text" class="form-control" id="email" placeholder="Attandance" name="attandance">
                      </div>
                    </div>

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

                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                      </div>
                </div>
            </div>
        </div>
        </div>

@endsection
