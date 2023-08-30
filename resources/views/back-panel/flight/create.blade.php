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
            <label for="flying_from">Airline image:</label>
            <input type="file" class="" id="images" name="images" placeholder="Enter departure city">
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
          <select class="form-control" id="class" name="round_trip">
            <option>oneway</option>
            <option>roundtrip</option>
          </select>
        </div>

          <div class="form-group col-md-4">
            <label for="departing">Departing:</label>
            <input type="text" class="datepicker" id="departing" name="departing">
            <i class="bi bi-calendar"></i>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="returning">Ariving::</label>
            <input type="text" class=" " id="returning" name="returning" class="datapicker">
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
        <textarea name="message" id=""
        style="width: 174%; height: 169px; margin-top: -11px;  border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
        rows="30" cols="50" placeholder="message"></textarea>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.11.0/js/bootstrap-datepicker.min.js"></script>
                        <script>
                          $(document).ready(function () {
                            $('.datepicker').datepicker({
                              format: 'dd-mm-yyyy', // Change the format as needed
                              autoclose: true,
                              todayHighlight: true
                            });
                          });
                        </script>


@endsection
