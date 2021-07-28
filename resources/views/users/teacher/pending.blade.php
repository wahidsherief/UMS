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
            <form action="{{route('teacher.profile_submit',['id' =>(Auth::user()->id)])}}" method="POST">
                @csrf
                <div class="card card-secondary">

                    <div class="card-header">
                        <div class="card-title font-weight-bold"> Please Complete Your Profile</div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter First Name"
                                        name="firstname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Last Name"
                                        name="lastname">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter First Name"
                                        name="teachers_short_name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Last Name"
                                        name="status">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Phone Number"
                                        name="phone">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blood Group</label>
                                    <input type="text" class="form-control" id="text" placeholder="Ex: A+"
                                        name="blood_group">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea placeholder="Enter Full Address" name="address" class="form-control"></textarea>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer bg-transparent">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
            @else


        </div>
    </div>
</div>


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
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter First Name"
                            name="firstname" value="{{$teacher->firstname}}" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lastname"
                            value="{{$teacher->lastname}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Short Name</label>
                        <input type="text" class="form-control" id="text" placeholder="" name="teachers_short_name"
                            value="{{$teacher->teachers_short_name}}" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input type="text" class="form-control" id="text" placeholder="" name="status"
                            value="{{$teacher->status}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phone"
                            value="{{$teacher->phone}}" readonly>
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Blood Group</label>
                        <input type="text" class="form-control" id="text" placeholder="Ex: A+" name="blood_group"
                            value="{{$teacher->blood_group}}" readonly>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" id="text" name="address" readonly>    {{$teacher->address}}</textarea>
            </div>
            @endforeach
            @endif
        </div>
    </div>
