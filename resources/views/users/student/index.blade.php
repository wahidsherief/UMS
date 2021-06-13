
@extends('users.student.layout')
@section('title',"student dashboard")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('student.profile.submit',['id' =>(Auth::user()->id)])}}" method="POST">
                  @csrf
                <div class="alert alert-primary" role="alert">
                    <div class="card-header">
                     Complete Your Profile</div>
                    </div>  @if(Session::has('pending'))
                    <div class="alert alert-warning" role='alert'>

                    {{Session::get('pending')}}

                    </div>
                            @endif
                <div class="card-body">
<div class="row">
    <div class="col">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname">
                  </div>
                </div>
                <div class="col">
  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lastname">
                  </div>
                </div></div>
<div class="row"><div class="col">
 <div class="form-group">
                    <label for="exampleInputEmail1">Roll Number</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Id Number" name="roll_number">
                  </div>
                </div>
<div class="col">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Registration Number</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Registration Number" name="registration_number">
                  </div>
                </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phone">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Present Address" name="address">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <input type="text" class="form-control" id="text" placeholder="Ex: A+" name="blood_group">
                  </div>

<div class="row">
    <div class="col">
                  <div class="form-group">
                    <label for="exampleInputEmail1">HSC GPA</label>
                    <input type="text" class="form-control" id="text" placeholder="ex:4.50" name="hsc_gpa">
                  </div>
                </div>
<div class="col">
     <div class="form-group">
                    <label for="exampleInputEmail1">SSC Gpa</label>
                    <input type="text" class="form-control" id="text" placeholder="ex: 5.00" name="ssc_gpa">
                  </div>
                </div>

<div class="col">                  <div class="form-group">
                    <label for="exampleInputEmail1">JSC GPA</label>
                    <input type="text" class="form-control" id="text" placeholder="ex: 4.86" name="jsc_gpa">
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PSC GPA</label>
                    <input type="text" class="form-control" id="text" placeholder="ex: 5.00" name="psc_gpa">
                  </div>
                </div>
            </div>
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>




    </div>


</div>
</div>



@endsection

