
@extends('users.admin.layout')
@section('title',"notice")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
<div class="card">

    <div class="alert alert-primary" role="alert">
    <div class="card-header">
     Add Department(Unique)</div>
    </div>
    <div class="card-body">
        <form class="form-inline" action="/action_page.php">
            <label for="text" class="mb-2 mr-sm-2">Department Name:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="department" placeholder="ex:CSE" name="department">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
            <div class="card-header">

        <div class="alert alert-info" role="info">

            </div>
            </div>
    </div>
</div>
</div>
</div>



@endsection
