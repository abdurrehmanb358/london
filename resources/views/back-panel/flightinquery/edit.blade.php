
@extends('back-panel.dashboard');
 @section('content')

<div class="d-flex justify-content-between">
    <a href="{{route('flight.index')}}" class="btn btn-primary rounded">All flight</a>
</div>

<h3 class="text-center">Update flight </h3>
<form action="{{ route('flight.update', [$flight->id]) }}" method="POST">
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
        <label for="email">Departing	</label>
        <input type="text" id="email" class="form-control" name="Departing	" placeholder="Enter Departing"
            value="{{ $flight->departing}}" required>
    </div>
    <div class="form-group">
        <label for="email">Returing</label>
        <input type="text" id="email" class="form-control" name="Returing" placeholder="Enter Returing"
            value="{{ $flight->returning }}" required>
    </div>
    <div class="form-group">
        <label for="email">Adults</label>
        <input type="text" id="email" class="form-control" name="Adults" placeholder="Enter Adults"
            value="{{ $flight->adults }}" required>
    </div>
    <div class="form-group">
        <label for="email">children</label>
        <input type="text" id="email" class="form-control" name="children" placeholder="Enter children"
            value="{{ $flight->children}}" required>
    </div>
    <div class="form-group">
        <label for="email">infants</label>
        <input type="text" id="email" class="form-control" name="infants" placeholder="Enter infants"
            value="{{ $flight->infants }}" required>
    </div>
    <div class="form-group">
        <label for="class">Type:</label>
        <select class="form-control" id="class" name="type">
          <option>Domestic</option>
          <option>International</option>
        </select>
      </div>



    <div class="form-group">
        <label for="class">Class:</label>
        <select class="form-control" id="class" name="class" placeholder="class">
          <option>Economy</option>
          <option>Business</option>
          <option>First Class</option>
        </select>
      </div>


 

    <button class="btn btn-primary btn-block rounderd" type="submit" style="width: 100%">Update flight</button>
</form>



@endsection