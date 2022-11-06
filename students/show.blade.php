@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">New and Event Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Tile : {{ $students->name }}</h5>
        <p class="card-text">Description : {{ $students->address }}</p>
        <p class="card-text">Date : {{ $students->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>