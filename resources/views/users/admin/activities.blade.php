
@extends('users.admin.layout')
@section('title',"Batch")

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
                  <th>Activity Title</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1; @endphp
        @foreach($activities as $activity)


          <!-- ./card-header -->


                <tr data-widget="expandable-table" aria-expanded="false">
                  <td> {{$i++}} </td>

                  <td>   <a href="{{route('admin.show.batch.design')}}"> {{$activity->semester_activities}}</a></td>

    <td>
    {{-- <span class="description">{{$batch->created_at->diffForHumans()}}</span>--}}
    </td>

                </tr>


    @endforeach
    </tbody>
    </table>

    </div>




@endsection

