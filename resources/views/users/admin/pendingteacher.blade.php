@extends('users.admin.layout')
@section('title',"Pending Teacher")


@section('content')
<div class="card card-secondary">

    <div class="card-header">

    <div class="card-title">    Pending Account</div>
    </div>
@if(!$count_account==0)
    <div class="card-body">
        <div class="card-body table-responsive p-0">

            <table class="table table-bordered table-hover">
                <thead>

                            <tr>
                                <th class="sl">SL</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Details </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($teachers as $teacher)
                            @php $account_status=$teacher->user->account_status; @endphp

                            @if($account_status==0)


                            <tr data-widget="expandable-table" aria-expanded="false">
<th>{{ $i++ }}</th>
                                <td>{{$teacher->firstname.' '.$teacher->lastname}}</td>

                                <td>{{$teacher->user->email}}</td>

                                <td>{{$teacher->phone}}</td>

                                    <td>
                                        <a href="{{ route('teacher_pending_account_details',$teacher->user->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>  Show Details </a>
                                    </td>




                            </tr>

                            @endif

                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
@else
<div class="text-danger text-center h5 p-4">No Request Found</div>

@endif

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
