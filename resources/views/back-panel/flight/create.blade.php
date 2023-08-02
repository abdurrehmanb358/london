@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('flight.index') }}" class="btn btn-primary rounded">All flight</a>
</div>

<h3 class="text-center">Create a New flight </h3>
<div class="container">
  <div class="card form-container">
    <div class="card-body">
      <h2 class="card-title text-center">Flight Booking Form</h2>
      <form action="{{ route('flight.store') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="flying_from">Flying from:</label>
            <input type="text" class="form-control" id="flying_from" name="flying_from" placeholder="Enter departure city">
          </div>
          <div class="form-group col-md-4">
            <label for="flying_to">Flying to:</label>
            <input type="text" class="form-control" id="flying_to" name="flying_to" placeholder="Enter destination city">
          </div>
          <div class="form-group col-md-4">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="class">Type:</label>
            <select class="form-control" id="class" name="type">
              <option>Domestic</option>
              <option>International</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="departing">Departing:</label>
            <input type="calendar" class="form-control" id="departing" name="departing">
            <i class="bi bi-calendar"></i>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="returning">Ariving::</label>
            <input type="date" class="form-control" id="returning" name="returning">
          </div>
          <div class="form-group col-md-4">
            <label for="adults">Adults:</label>
            <input type="number" class="form-control" id="adults" name="adults" min="1">
          </div>
          <div class="form-group col-md-4">
            <label for="children">Children:</label>
            <input type="number" class="form-control" id="children" name="children" min="0">
          </div>
        </div>
        <div class="form-group">
          <label for="infants">Infants:</label>
          <input type="number" class="form-control" id="infants" name="infants" min="0">
        </div>
        <div class="form-group">
          <label for="class">Class:</label>
          <select class="form-control" id="class" name="class">
            <option>Economy</option>
            <option>Business</option>
            <option>First Class</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
