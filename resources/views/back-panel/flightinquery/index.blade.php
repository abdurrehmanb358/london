@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<h2 style="text-align: center">All Flight Inquiries</h2>

<div class="table-responsive">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Destination</th>
                <th>Form</th>
                <th>Date of Departure</th>
                <th>Date of Arrival</th>
                <th>Airline</th>
                <th>Number of Passengers</th>
                <th>Class</th>
                <th>Message</th>
                <th>Flight ID</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inquiries as $inquiry)
            <tr>
                <td>{{ $inquiry->first_name }}</td>
                <td>{{ $inquiry->last_name }}</td>
                <td>{{ $inquiry->email }}</td>
                <td>{{ $inquiry->phone_number }}</td>
                <td>{{ $inquiry->destination }}</td>
                <td>{{ $inquiry->form }}</td>
                <td >{{ $inquiry->date_of_departure }}</td>
                <td>{{ $inquiry->date_of_arrival }}</td>
                <td>{{ $inquiry->airline }}</td>
                <td>{{ $inquiry->number_of_passenger }}</td>
                <td>{{ $inquiry->class }}</td>
                <td>{{ $inquiry->message }}</td>
                <td>{{ $inquiry->flight_id }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="13">No inquiry found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
