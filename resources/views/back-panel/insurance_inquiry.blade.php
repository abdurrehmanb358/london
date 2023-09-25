
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container" id="umrahTableContainer">
    <h2>All insurance Inquiries</h2>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Costomer_Name</th>
            <th>CNIC</th>
            <th>Date_of_birth</th>
            <th>Father_Name</th>
            <th>Mobile_Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>purpose_of_travel</th>
            <th>Adress</th>
            <th>passport</th>
            <th>Departure_Date</th>
            <th>Select_country_of_travel</th>
            <th>Airline</th>
            <th>Number_of_passenger</th>
            <th>class</th>
            <th>Class</th>
            <th>Benficiary_Name</th>
            <th>Benficiary_Relation</th>
            <th>Benficiary_CNIC</th>
            <th>Benficiary_Phone</th>
            <th>Benficiary_Adress</th>

          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($flightInquiry as $fligh) --}}

                <tr>
                    {{-- <td>{{ $loop->index + 1 }}</td> --}}

                    <td><a href="/layouts//show" class="text-dark"></a></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td> </td>

                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>

</div>

{{-- @endsection --}}
