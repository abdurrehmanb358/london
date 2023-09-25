
@extends('back-panel.dashboard');
 @section('content')

<div class="d-flex justify-content-between">
    <a href="{{route('flight.index')}}" class="btn btn-primary rounded">All flight</a>
</div>

<h3 class="text-center">Update flight </h3>
<form action="{{ route('flight.update', [$flight->id]) }}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">flying_form</label>
        <input type="text" id="name" class="form-control" name="flying_form" placeholder="Enter flying_form"
            value="{{ $flight->flying_from}}" required>
    </div>

    <div class="form-group">
        <label for="email">flying_to</label>
        <input type="text" id="email" class="form-control" name="flying_to" placeholder="Enter flying_to"
            value="{{ $flight->flying_to }}" required>
    </div>
    <div class="form-group">
      <label for="email">price	</label>
      <input type="text" id="email" class="form-control" name="price" placeholder="Enter Departing"
          value="{{ $flight->price}}" required>
  </div>
  <div class="form-group">
    <label for="class">Type:</label>
    <select class="form-control" id="class" name="type">
      <option>Domestic</option>
      <option>Inter</option>
    </select>
  </div>
    <div class="form-group">
        <label for="email">Departing	</label>
        <input type="text" id="email" class="form-control" name="departing" placeholder="Enter Departing"
            value="{{ $flight->departing}}" >
    </div>
    <div class="form-group">
        <label for="email">Returing</label>
        <input type="text" id="email" class="form-control" name="returing" placeholder="Enter Returing"
            value="{{ $flight->returning }}" >
    </div>
    <div class="form-group">
      <label for="email">image</label>
      <input type="file" id="email" class="form-control" name="image">
  </div>
    <div class="form-group">
        <label for="class">Class:</label>
        <select class="form-control" id="class" name="class" placeholder="class">
          <option>Economy</option>
          <option>Business</option>
          <option>First Class</option>
        </select>
      </div>
      <div>
        <label for="message">Description</label>
        <textarea name="message" id="message"
                  style="width: 100%; height: 169px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                  rows="4" cols="50"> {!! $flight->message !!} </textarea>
        
      
 

    <button class="btn btn-primary btn-block rounderd" type="submit" style="width: 100%">Update flight</button>
</form>



@endsection