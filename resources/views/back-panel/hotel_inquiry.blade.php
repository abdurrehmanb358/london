
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container" id="umrahTableContainer">
    <h2>All Hotel Inquiries</h2>
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
            <th>Description</th>
            <th>Hotel Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{ $hotel->name }}</a></td>

                    <td>{{ $hotel->email }}</td>

                    <td>{{ $hotel->phone }}</td>

                    <td>{{ $hotel->travFrom }}</td>

                    <td>{{ $hotel->starDate }}</td>

                    <td>{{ $hotel->endDate }}</td>

                    <td>{{ $hotel->descripyion }}</td>

                    <td>{{ $hotel->hname }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
