@extends('users.admin.layout')
@section('title',"Examination")

@section('content')

<div class="container">

    <!-- /.card-header -->
    <div class="card-body">
        <div class="ums-content-heading">
            <h3 class="card-title">Add Examination</h3>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Examination Name </label>
                            <input type="text" class="form-control input-sm" id="text" placeholder="Examination Name"
                                name="name">
                            @error('name')
                            <span class='text-danger'>{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- /.card-body -->

                        <div class="float-right">
                            <button class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i>
                                Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($count!==0)

        <div class="ums-content-heading">
            <h3 class="card-title">Examination</h3>
        </div>
        <div class="card-body table-responsive p-0 text-center">
            <table class="table table-borderless table-hover ">
                <thead>
                    <tr>
                        <th></th>
                        <th>Session Title</th>
                        <th>Examination Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($examinations as $examination)

                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td> {{$i++}} </td>

                        <td> {{$examination->session->session_name}}</a></td>
                        <td> {{$examination->name}}</a></td>

                        <td>
                            @if($examination->status==0)

                            <form action="{{ route('examination.start',$examination->id) }}"
                                method="POST" onclick="return confirm('are you to start?')" >@csrf
                               <button class="ums-tiny-btn text-success"><i class="fas fa-play"></i>  Start</button>
                           </form>
                            @endif

                            @if($examination->status==1)

                            <form action="{{ route('examination.end',$examination->id) }}"
                                 method="POST" onclick="return confirm('are you to Stop?')"  >@csrf
                                <button class="ums-tiny-btn text-info"><i class="fas fa-pause"></i>  Stop</button>
                            </form>
                            @endif

                            @if($examination->status==2)
                            <span class="ums-tiny-btn text-danger"><i class="fas fa-times"></i>  Expired</a>

                                @endif

                                {{-- @if($examination->id==$latest)
        <a href="{{route('admin.update_examination',$examination->id)}}" class="ums-tiny-btn"> Update</a>
                                {{-- <a href="{{route('admin.delete_examination',$examination->id)}}"
                                class="ums-tiny-btn btn-dan"> Delete</a> --}}


                        </td>

                    </tr>


                    @endforeach
                </tbody>
            </table>
        </div>

        @else

        <div class="text-muted font-italic text-danger text-center h6 pt-3 pb-3">No Data Available</div>
        @endif

    </div>
</div>
</div>

@if(Session::has('created'))
<script>
    swal("Created", "Examination has been Created successfully", "success");
</script>
@endif
@if(Session::has('started'))
<script>
    swal("Started", "Examination Has Been Started", "success");
</script>
@endif

@if(Session::has('stopped'))
<script>
    swal("Stopped", "Examination has been Stopped", "error");
</script>
@endif

</div>


</div>
</div>







@endsection
