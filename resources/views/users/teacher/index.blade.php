@extends('users.teacher.layout')
@section('title', 'Dashboard Page')

@section('dashboard-content')

{{-- Account Verification Check --}}
@php $account_status=Auth::user()->account_status;
@endphp
@if (!$account_status == 1)
@include('users.teacher.pending')
@else

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="ums-content-heading">
                    <h3 class="card-title">Today's Class</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-borderless table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Course ID</th>
                                <th>Course Name</th>
                                <th>Time</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="ums-content-heading">
                    <h3 class="card-title">Today's Class</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-borderless table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Course ID</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <div class="ums-content-heading">
                    <h3 class="card-title">Events</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-borderless table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Event</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>CSE 423</td>
                                <td>401</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card">
            <div class="card-body">
                <div class="ums-content-heading">
                    <h3 class="card-title">Notices</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-borderless table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Course ID</th>
                                <th>Course Name</th>
                                <th>Time</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <th>CSE 423</td>
                                <td>Internet & Web Tech..</td>
                                <td>10.00 - 11.00</td>
                                <td>401</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection