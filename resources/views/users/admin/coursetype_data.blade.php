@extends('users.admin.layout')
@section('title',"Course Type")

@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection


@section('content')
<div class="card-body">
    <div class="ums-content-heading">
      <h3 class="card-title">All Sessions</h3>
    </div>
    <div class="card-body table-responsive p-0 text-center">
      <table class="table table-borderless table-hover table-sm">
            <thead>
              <tr>
                <th class="sl"></th>
                <th>Course Type</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($coursetypes as $coursetype)


              <!-- ./card-header -->


              <tr data-widget="expandable-table" aria-expanded="false">
                <td  class='text-left'> {{$i++}} </td>
                <td>{{$coursetype->course_type}}</td>

                {{-- <td> <span class="description">{{$department->created_at->diffForHumans()}}</span></td> --}}

                <td class='text-right'>
                  {{-- <a href="{{route('student.single_notice',$coursetype->id)}}" class="ums-tiny-btn text-info mr-2"> Update</a> --}}
                  <a href="{{route('admin.course_type_delete',$coursetype->id)}}" class="ums-tiny-btn text-danger" onclick="return confirm('Are You Sure???')"> Delete</a>
                </td>
              </tr>


              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
</div>
</div>
       @if(Session::has('deleted'))
        <script>
            swal("Deleted", "Course Type has been Deleted successfully", "error");
        </script>
        @endif

@endsection
