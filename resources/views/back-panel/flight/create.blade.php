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
      <form action="{{ route('flight.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="flying_from">Airline image:</label>
            <input type="file" class="" id="images" name="image" >
          </div> 
          <div class="form-group col-md-4">
            <label for="flying_from">Flying from:</label>
            <input type="text" class="" id="flying_from" name="flying_from" placeholder="Enter departure city">
          </div>
          <div class="form-group col-md-4">
            <label for="flying_to">Flying to:</label>
            <input type="text" class="" id="flying_to" name="flying_to" placeholder="Enter destination city">
          </div>
          <div class="form-group col-md-4">
            <label for="price">Price:</label>
            <input type="text" class="" id="price" name="price" placeholder="Enter price">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="class">Type:</label>
            <select class="form-control" id="class" name="type">
              <option>Domestic</option>
              <option>Inter</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <label for="class">roundtrip:</label>
          <select class="form-control" id="class" name="trip_type">
            <option>oneway</option>
            <option>roundtrip</option>
          </select>
        </div>
        {{-- <div class="form-group col-md-4">
          <label for="price">Price:</label>
          <input type="text" class="" id="price" name="price" placeholder="Enter price">
        </div> --}}
          <div class="form-group col-md-4">
            <label for="departing">Departing:</label>
            <input type="text"  id="departing " name="departing" class="datepicker" placeholder="Departing">
            <i class="bi bi-calendar"></i>

          </div>
    
          <div class="">
            <label for="returning">Ariving::</label>
            <input type="text" id="" name="returning" class="datepicker" placeholder="Ariving">
          </div>
        
        
          
        <div class="form-group">
          <label for="class">Class:</label>
          <select class="" id="class" name="class">
            <option>Economy</option>
            <option>Business</option>
            <option>First Class</option>
          </select>
        </div>
        <div>
          <textarea name="message" id="message"
              style="width: 100%; height: 169px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
              placeholder="Message" rows="4" cols="50"></textarea>
      </div>
      
        
        <div>
           <div class="text-center from-control" >
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
        </div>
        
    
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function () {
      $(".datepicker").datepicker({
          dateFormat: 'yy-mm-dd' // Set the date format to match MySQL (YYYY-MM-DD)
      });
  });
</script>


@endsection
