
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
            <h2>All Umrah Inquiries</h2>
        </div>
        <div>
            <button class="btn btn-success "><a href="/exportUmrahInquiry" style="color: white">Export</a></button>
        </div>
    </div>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>No of Person</th>
            <th>Pakage Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($inquiry as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{ $hotel->name }}</a></td>

                    <td>{{ $hotel->email }}</td>

                    <td>{{ $hotel->phone }}</td>

                    <td>{{ $hotel->date }}</td>

                    <td>{{ $hotel->noOfPerson }}</td>

                    <td>{{ $hotel->days }}</td>

                    <td>
                        <a href="/umrahInquiry/{{ $hotel->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
