@extends('users.admin.layout')
@section('title','Teachers')


@section('nav_bar')
@include('users.top_nav.admin_users')
@endsection



@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">All Teachers</h3>
    </div>

    <div class="card-body table-responsive p-0 text-center">
        <table class="table table-borderless table-hover table-sm">
            <thead>

                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($teachers as $teacher)

 {{-- {{ $teacher->user->picture }} --}}
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td class='text-left'><img class="img-circle"
                        src="{{ $teacher->user->picture }}" width="40" alt="U">
                </td>
                    <td>{{$teacher->user->name}}</td>
                    <td>{{$teacher->user->email}}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td class="text-right">
                        <a href="{{ route('admin.teacher_details',$teacher->id) }}"
                            class="ums-tiny-btn text-success"><i class="fas fa-eye"></i> Details </a>
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
