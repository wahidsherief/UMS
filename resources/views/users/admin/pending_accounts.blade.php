@extends('users.admin.layout')
@section('title',"Pending Accounts")

@section('nav_bar')
@include('users.top_nav.admin_users')
@endsection

@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Pending Accounts</h3>
      </div>

    <div class="card-body table-responsive p-0 text-center">
        <table class="table table-borderless table-hover table-sm">
                <thead>

                    <tr>
                        <th class="sl"></th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($users as $user)


                    <tr data-widget="expandable-table" aria-expanded="false">
                        <th>{{ $i++ }}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>

                            @if($user->role==3)
                            Teacher
                            @elseif($user->role==4)
                            Student
                            @endif

                        </td>

                        <td>
                            <a href="{{ route('admin.pending_account_details',$user->id) }}" class="ums-tiny-btn text-success"><i class="fas fa-eye"></i> Details </a>
                        </td>
                    </tr>



                    @endforeach

                </tbody>
            </table>

        </div>
    </div>


</div>
</div>


@if(Session::has('account_approved'))
<script>
    swal("Success", "Account has been approved successfully", "success");
</script>
@elseif(Session::has('request_removed'))
<div class="alert alert-danger" role='alert'>
    {{Session::get('request_removed')}}
</div>
@endif
@endsection
