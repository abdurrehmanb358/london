
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container" id="umrahTableContainer">
    <div class="d-flex justify-content-between">
        <div>
            <h2>All Holiday Inquiries</h2>
        </div>
        <div>
            <button class="btn btn-success "><a href="/exportHolidayInquiry" style="color: white">Export</a></button>
        </div>
    </div>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Travel From</th>
            <th>Start date</th>
            <th>End Date</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Infants</th>
            <th>Description</th>
            <th>Holiday Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($holidays as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/holiday/show{{ $hotel->id}}" class="text-dark">{{ $hotel->passName }}</a></td>

                    <td>{{ $hotel->pEmail }}</td>

                    <td>{{ $hotel->Contnumber }}</td>

                    <td>{{ $hotel->pTravFrom }}</td>

                    <td>{{ $hotel->pStarDate }}</td>

                    <td>{{ $hotel->pEndDate }}</td>

                    <td>{{ $hotel->adults }}</td>
                    
                    <td>{{ $hotel->children }}</td>
                    
                    <td>{{ $hotel->infants }}</td>

                    <td>{{ $hotel->description }}</td>

                    <td>{{ $hotel->hname }}</td>

                    <td>
                        <a href="/holidayInquiry/{{ $hotel->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
