<p></p>
@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header"> Notice and Events</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Details</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label for="start">Date:</label>

<input type="date" id="start" name="mobile"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
        <!-- <label></label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br> -->
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop