


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($teachers as $teacher)
@php $user_exists=$teacher->user_id;
 $main_user=Auth::user()->id;
@endphp

@endforeach
@if(!isset($user_exists))
              <form action="{{route('teacher.profile.submit',['id' =>(Auth::user()->id)])}}" method="POST">
                  @csrf
                <div class="alert alert-primary" role="alert">
                    <div class="card-header">
                     Complete Your Profile
                    </div>
                    </div>
                <div class="card-body">

                   <div class="row">
                        <div class="col">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Department </label>

                                       <select class="form-control" name="department_id">
                                           @foreach($departments as $department)

                                           <option value="{{$department->id}}">{{$department->department_name}}</option>
                                           @endforeach
                                       </select>

                                      </div>
                                    </div>

                                </div>
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

<div class="col">
                  <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="text" placeholder="Status" name="status">
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


            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@else


    </div></div></div>
@endif

<div class="container">
    @foreach($teachers as $teacher)

<div class="card col-md-10 offset-md-1">
    <div class="card-header">
        <h3 class="alert alert-warning" role="alert">Account is Pending</h3>
    </div>


    <div class="card-body ">


     <div class="row">
    <div class="col">
        <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname"
                value=" {{$teacher->department->department_name}}" readonly>
                </div>
                </div>
                </div>
<div class="row">
<div class="col">
      <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname" value="{{$teacher->firstname}}"readonly>
      </div>
    </div>
    <div class="col">
<div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lastname"value="{{$teacher->lastname}}"readonly>
      </div>
    </div></div>
<div class="row">
    <div class="col">
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <input type="text" class="form-control" id="text" placeholder="" name="status"value="{{$teacher->status}}"readonly>
        </div>
      </div>


    </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phone"value="{{$teacher->phone}}"readonly>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Present Address" name="address"value="{{$teacher->address}}"readonly>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Blood Group</label>
        <input type="text" class="form-control" id="text" placeholder="Ex: A+" name="blood_group"value="{{$teacher->blood_group}}"readonly>
      </div>
      @endforeach
</div></div>
