
@extends('users.admin.layout')
@section('title',"Pending Teacher")


@section('content')
<div class="" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">

    <div class="card-header">
        @if(Session::has('account_approved'))
        <div class="alert alert-success" role='alert'>
        {{Session::get('account_approved')}}
        </div>
        @elseif(Session::has('request_removed'))
        <div class="alert alert-danger" role='alert'>
            {{Session::get('request_removed')}}
            </div>
                @endif
        <h3 class="card-title">Pending Teacher Account</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Department</th>

              <th>First Name</th>
              <th>Last Name</th>
              <th>Status</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Blood</th>

              <th>Action  </th>
            </tr>
          </thead>
          <tbody>
    @foreach($teachers as $teacher)


    @php $account_status=$teacher->user->account_status; @endphp
    @if($account_status==0)
            <tr data-widget="expandable-table" aria-expanded="false">

              <td>{{$teacher->department->department_name}}</td>

              <td>{{$teacher->firstname}}</td>
              <td>{{$teacher->lastname}}</td>
              <td>{{$teacher->status}}</td>
              <td>{{$teacher->phone}}</td>
              <td>{{$teacher->address}}</td>
              <td>{{$teacher->blood_group}}</td>
<td>
    <form method="POST" action="{{route('admin.teacher_account_approve',$teacher->user->id)}}">
        @csrf
        <input type="submit" class="btn btn-success" value="Approve">


    </form>
    <a href="{{route('admin.teacher_account_delete',$teacher->id)}}" class="btn btn-danger">reject</a>
</td>


            </tr>

            @endif

@endforeach
</tbody>
</table>

</div>



</div></div></div></div>
@endsection

