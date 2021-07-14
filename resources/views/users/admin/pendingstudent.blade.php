
@extends('users.admin.layout')
@section('title',"Pending Student")


@section('content')
<div class="container">
    <div class="card card-secondary  table-responsive p-0">
      <div class="card-header">
        <h3 class="card-title">Student Pending Account</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">

          <thead>
            <tr>
              <th>Department</th>
              <th>Batch</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Roll Number</th>
              <th>Registration Number</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Blood</th>
              <th>HSC</th>
              <th>SSC</th>
              <th>JSC</th>
              <th>PSC</th>
              <th>Action  </th>
            </tr>
          </thead>
          <tbody>
    @foreach($students as $student)


    @php $account_status=$student->user->account_status; @endphp
    @if($account_status==0)
            <tr data-widget="expandable-table" aria-expanded="false">

              <td>{{$student->department->department_name}}</td>
              <td>{{$student->batch->batch_name}}</td>
              <td>{{$student->firstname}}</td>
              <td>{{$student->lastname}}</td>
              <td>{{$student->roll_number}}</td>
              <td>{{$student->registration_number}}</td>
              <td>{{$student->phone}}</td>
              <td>{{$student->address}}</td>
              <td>{{$student->blood_group}}</td>
              <td>{{$student->hsc_gpa}}</td>
              <td>{{$student->ssc_gpa}}</td>
              <td>{{$student->jsc_gpa}}</td>
              <td>{{$student->psc_gpa}}</td>
<td>

    <form method="POST" action="{{route('admin.student_account_approve',$student->user->id)}}">
        @csrf
        <input type="submit" class="btn btn-success" value="Approve">
    </form>
    <a href="{{route('admin.student_account_delete',$student->id)}}" class="btn btn-danger">reject</a>

</td>


            </tr>

            @endif

@endforeach
</tbody>
</table>

</div>



</div></div></div></div>
@if(Session::has('account_approved'))
<script>
swal("Approved", "Student account has been activated successfully", "success");
</script>
@elseif(Session::has('request_removed'))
<script>
    swal("Rejected", "Student information has been removed", "error");
    </script>
        @endif
@endsection

