
            <!-- /.card-header -->
            <!-- form start -->
            @foreach($teachers as $teacher)
            @php $user_exists=$teacher->user_id;
            $main_user=Auth::user()->id;
            @endphp

            @endforeach
            @if(!isset($user_exists))
            <div class="card-body">
                <div class="ums-content-heading">
                    <h3 class="card-title">Student List</h3>
                </div>
            <form action="{{route('teacher.profile_submit',['id' =>(Auth::user()->id)])}}" method="POST">
                @csrf
                <div class="card card-secondary">

                    <div class="card-header">
                        <div class="card-title font-weight-bold"> Please Complete Your Profile</div>

                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control " id="text" placeholder="Enter First Name"
                                        name="firstname"value={{ old('firstname') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control  " id="text" placeholder="Enter Last Name"
                                        name="lastname"value={{ old('lastname') }}>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Name</label>
                                    <input type="text" class="form-control " id="text" placeholder="Enter Short Name"
                                        name="teachers_short_name"value={{ old('teachers_short_name') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control " id="text" placeholder="Status"
                                        name="status"value={{ old('status') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                <select name="gender" id=""class="form-control "value={{ old('gender') }}>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control " id="text" placeholder="Enter Phone Number"
                                        name="phone"value={{ old('phone') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blood Group</label>
                                    <input type="text" class="form-control " id="text" placeholder="Ex: A+"
                                        name="blood_group"value={{ old('blood_group') }}>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea placeholder="Enter Full Address" name="address"
                                        class="form-control">{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About Yourself</label>

                                    <textarea class="form-control" id="text" name="about"
                                        placeholder="About yourself 50-150 words" minlength="50"
                                        maxlength="300">{{ old('about') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Master Degree</label>
                                    <input type="text" class="form-control " id="text" placeholder="Institution Name"
                                        name="masters_institution" value={{ old('masters_institution') }}>
                                </div></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bachelor Degree</label>
                                     <input type="text" class="form-control " id="text" placeholder="Institution Name"
                                     name="bachelor_institution"value={{ old('bachelor_institution') }}>
                                    </div>
                                </div>
                            </div>





                    <!-- /.card-body -->

                    <div class="card-footer bg-transparent">
                        <button type="submit" class="btn btn-primary float-right   btn-sm">Submit</button>
                    </div>  </div> </div> </div>
            </form>

@else

    @foreach($teachers as $teacher)
    <div class="card-body">
        <div class="ums-content-heading">
            <h3 class="card-title">Your Information</h3>
        </div>
        <div class="card-body">



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
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea placeholder="Enter Full Address" name="address"
                            class="form-control" readonly>{{ $teacher->address }}</textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">About Yourself</label>

                        <textarea class="form-control" id="text" name="about"
                            placeholder="About yourself 50-150 words" minlength="50"
                            maxlength="200"  readonly>{{ $teacher->about }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Master Degree</label>
                        <input type="text" class="form-control " id="text" placeholder="Institution Name"
                            name="masters"  readonly value={{ $teacher->masters_institution }}>
                    </div></div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bachelor Degree</label>
                         <input type="text" class="form-control " id="text" placeholder="Institution Name"
                         name="bachelor" readonly value={{ $teacher->masters_institution }}>
                        </div>
                    </div>
                </div>






            @endforeach
            @endif
        </div>
    </div>
