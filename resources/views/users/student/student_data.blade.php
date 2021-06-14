
@extends('users.student.layout')
@section('title',"student profile")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">

    <div class="card-header">
        <h3 class="card-title">Your Profile Information</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">

    @foreach($students as $student)



    <div class="card-body">


     <div class="row">
    <div class="col">
        <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname"
                value=" {{$student->department->department_name}}" readonly>
                </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Batch</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname"
                    value=" {{$student->batch->batch_name}}"readonly>
                    </div></div></div>
<div class="row">
<div class="col">
      <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" class="form-control" id="text" placeholder="Enter First Name" name="firstname" value="{{$student->firstname}}"readonly>
      </div>
    </div>
    <div class="col">
<div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lastname"value="{{$student->lastname}}"readonly>
      </div>
    </div></div>
<div class="row">
    <div class="col">
        <div class="form-group">
          <label for="exampleInputEmail1">Registration Number</label>
          <input type="text" class="form-control" id="text" placeholder="Enter Registration Number" name="registration_number"value="{{$student->registration_number}}"readonly>
        </div>
      </div>

    <div class="col">
<div class="form-group">
        <label for="exampleInputEmail1">ID Number</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Id Number" name="roll_number" value="{{$student->roll_number}}"readonly>
      </div>
    </div>

    </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phone"value="{{$student->phone}}"readonly>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" id="text" placeholder="Enter Present Address" name="address"value="{{$student->address}}"readonly>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Blood Group</label>
        <input type="text" class="form-control" id="text" placeholder="Ex: A+" name="blood_group"value="{{$student->blood_group}}"readonly>
      </div>

<div class="row">
<div class="col">
      <div class="form-group">
        <label for="exampleInputEmail1">HSC GPA</label>
        <input type="text" class="form-control" id="text" placeholder="ex:4.50" name="hsc_gpa"value="{{$student->hsc_gpa}}"readonly>
      </div>
    </div>
<div class="col">
<div class="form-group">
        <label for="exampleInputEmail1">SSC Gpa</label>
        <input type="text" class="form-control" id="text" placeholder="ex: 5.00" name="ssc_gpa"value="{{$student->ssc_gpa}}"readonly>
      </div>
    </div>

<div class="col">                  <div class="form-group">
        <label for="exampleInputEmail1">JSC GPA</label>
        <input type="text" class="form-control" id="text" placeholder="ex: 4.86" name="jsc_gpa"value="{{$student->jsc_gpa}}"readonly>
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        <label for="exampleInputEmail1">PSC GPA</label>
        <input type="text" class="form-control" id="text" placeholder="ex: 5.00" name="psc_gpa"value="{{$student->psc_gpa}}"readonly>
      </div></div></div></div></div></div></div></div>

      @endforeach
@endsection
