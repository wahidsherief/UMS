
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title"> Complete Your Profile</h3>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-10 offset-md-1">
                <!-- /.card-header -->
                <!-- form start -->

                @php
                $main_user=Auth::user()->id;
                @endphp
                @if($no_student)
                <form action="{{ route('student_full_information_submit')}}" method="POST">
                    @csrf
                    <div class="card-body">


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter First Name"
                                        name="firstname" value={{ old('firstname') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Last Name"
                                        name="lastname" value={{ old('lastname') }}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID No</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Id Number"
                                        name="roll_number" value={{ old('roll_number') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reg. No</label>
                                    <input type="text" class="form-control" id="text"
                                        placeholder="Enter Registration Number" name="registration_number" value={{ old('registration_number') }}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="text" placeholder="Enter Phone Number"
                                        name="phone" value={{ old('phone') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batch</label>
                                    <select class="form-control" name="batch_id" value={{ old('batch_id') }}>
                                        @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}">{{ $batch->batch_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birthday</label>
                                    <input type="date" class="form-control" id="text"
                                    name="birthday" value={{ old('birthday') }}>

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Skill</label>
                                    <input type="text" class="form-control" id="text" placeholder="ex: c++, Java, Php, Python"
                                        name="skill" required value={{ old('skill') }}>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select name="gender" class="form-control" value={{ old('gender') }}>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blood Group</label>
                                    <input type="text" class="form-control" id="text" placeholder="Ex: A+"
                                        name="blood_group" value={{ old('blood_group') }} >
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About Yourself</label>

        <textarea class="form-control" id="text" name="about"  placeholder="About yourself 50-150 words" minlength="50" maxlength="200"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea class="form-control" id="text" name="address"
                                        placeholder="Your Full Address"></textarea>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HSC GPA</label>
                                    <input type="text" class="form-control" id="text" placeholder="ex:4.50"
                                        name="hsc_gpa" value={{ old('hsc_gpa') }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SSC Gpa</label>
                                    <input type="text" class="form-control" id="text" placeholder="ex: 5.00"
                                        name="ssc_gpa"value={{ old('ssc_gpa') }}>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">JSC GPA</label>
                                    <input type="text" class="form-control" id="text" placeholder="ex: 4.86"
                                        name="jsc_gpa" value={{ old('jsc_gpa') }}>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">PSC GPA</label>
                                    <input type="text" class="form-control" id="text" placeholder="ex: 5.00"
                                        name="psc_gpa" value={{ old('psc_gpa') }}>
                                </div>
                            </div>
                        </div>



                    </div>
                        <button type="submit" class="btn btn-success float-right btn-sm"><i class="fa fa-check-circle"
                            aria-hidden="true"></i>
                        Submit</button>

                </form>


@else

<h1>Request Pending</h1>

@endif

            </div>


        </div>
    </div>
</div>


@if (Session::has('pending'))
<script>
    swal("Good Job", "Once your account activated, you will get a confirmation email", "Success");
</script>
@endif
