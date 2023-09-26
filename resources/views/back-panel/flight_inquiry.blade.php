
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container" id="umrahTableContainer">
    <h2>All Umrah Inquiries</h2>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Destination</th>
            <th>Form</th>
            <th>Date of Departure</th>
            <th>Date of Arrivel</th>
            <th>Airline</th>
            <th>No of Person</th>
            <th>Class</th>
            <th>message</th>
            <th>Flight Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($flightInquiry as $flight)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $flight->id}}/show" class="text-dark">{{ $flight->fname }}</a></td>

                    <td>{{ $flight->lname }}</td>

                    <td>{{ $flight->email }}</td>

                    <td>{{ $flight->phone }}</td>

                    <td>{{ $flight->destination }}</td>

                    <td>{{ $flight->form }}</td>

                    <td>{{ $flight->dateOfDeparture }}</td>

                    <td>{{ $flight->dateOfArival }}</td>

                    <td>{{ $flight->airline }}</td>

                    <td>{{ $flight->noOfPassenger }}</td>

                    <td>{{ $flight->class }}</td>

                    <td>{{ $flight->message }}</td>

                    <td>{{ $flight->flying_from }} to {{ $flight->flying_to }}</td>

                    <td>
                        <a href="/flightInquiry/{{ $flight->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
