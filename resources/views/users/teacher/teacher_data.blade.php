


    <div class="card-header">
        <h3 class="card-title">Your Profile Information</h3>
      </div>
      @if(Session::has('pending'))
                    <div class="alert alert-warning" role='alert'>

                    {{Session::get('pending')}}
@endif
      <div class="card-body">
        <table class="table table-bordered table-hover">

    @foreach($teachers as $teacher)



    <div class="card-body">


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

