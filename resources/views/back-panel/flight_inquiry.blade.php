
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
          </tr>
        </thead>
        <tbody>
            @foreach ($flightInquiry as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{ $hotel->fname }}</a></td>

                    <td>{{ $hotel->lname }}</td>

                    <td>{{ $hotel->email }}</td>

                    <td>{{ $hotel->phone }}</td>

                    <td>{{ $hotel->destination }}</td>

                    <td>{{ $hotel->form }}</td>

                    <td>{{ $hotel->dateOfDeparture }}</td>

                    <td>{{ $hotel->dateOfArival }}</td>

                    <td>{{ $hotel->airline }}</td>

                    <td>{{ $hotel->noOfPassenger }}</td>

                    <td>{{ $hotel->class }}</td>

                    <td>{{ $hotel->message }}</td>

                    <td>{{ $hotel->flying_from }} to {{ $hotel->flying_to }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
