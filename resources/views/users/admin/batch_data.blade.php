@extends('users.admin.layout')
@section('title',"batch")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">All Batches of CSE</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
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

              <td>
                {{-- <span class="description">{{$batch->created_at->diffForHumans()}}</span>--}}
              </td>
              <td>
                <a href="{{route('student.single_notice',$batch->id)}}" class="btn btn-warning"> Update</a>
                <a href="{{route('admin.deletebatch',$batch->id)}}" class="btn btn-danger"> Delete</a>
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
@endsection