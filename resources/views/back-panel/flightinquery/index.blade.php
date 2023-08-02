@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('flight.create') }}" class="btn btn-primary rounded">Add Flights</a>
</div>

<h2>All Flights</h2>

<div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>Flying From</th>
                <th>Flying To</th>
                <th>Price</th>
                <th>Type</th>
                <th>Departing</th>
                <th>Arriving</th>
                
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($flights as $flight)
            <tr>
                <td>{{ $flight->flying_from }}</td>
                <td>{{ $flight->flying_to }}</td>
                <td>{{ $flight->price }}</td>
                <td>{{ $flight->type }}</td>
                <td>{{ $flight->departing }}</td>
                <td>{{ $flight->returning }}</td>
               
                <td>{{ $flight->class }}</td>
                <td>
                    <a href="{{ route('flight.edit', $flight->id) }}" class="btn btn-warning btn-sm rounded">Edit</a>
                    <form action="{{ route('flight.destroy', $flight->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">No flights found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
