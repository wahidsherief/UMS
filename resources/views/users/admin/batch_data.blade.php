
@extends('users.admin.layout')
@section('title',"batch")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">
    <!-- Post -->
    <div class="card-header">
        <h3 class="card-title">Expandable Table</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Batch Name</th>
              <th>Created At</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @php $i=1; @endphp
    @foreach($batches as $batch)


      <!-- ./card-header -->


            <tr data-widget="expandable-table" aria-expanded="false">
              <td> {{$i++}} </td>

              <td>{{$batch->batch_name}}</td>
              {{-- <td>{{$batch->batch_advisor}}</td> --}}
              {{-- <td> <span class="description">{{$batch->created_at->diffForHumans()}}</span></td> --}}

              <td>
                  <a href="{{route('student.single_notice',$batch->id)}}" class="btn btn-info"> Update</a>
                  <a href="{{route('student.single_notice',$batch->id)}}" class="btn btn-danger"> Delete</a>
              </td>
            </tr>


@endforeach
</tbody>
</table>

</div>
      <!-- /.card-body -->






    {{-- <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{$notify->picture}}" alt="Teacher's image">
        <span class="username">
          <b>{{$notify->name}}</b>
        </span>
        <span class="description">{{$notify->created_at->diffForHumans()}}</span>
      </div>
      <h3></h3>
      <!-- /.user-block -->
      <p style="color:black;font-size:18px;">

      </p>


    <!-- /.post -->

   </div> --}}

</div></div></div></div>
@endsection
