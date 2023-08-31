
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="/back-panel/holiday/create" class="btn btn-primary btn-sm rounded">Add New Holiday Pakage</a>

</div>

<div class="container">
    <h2>All Holidays</h2>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Category</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($holidays as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{ $hotel->name }}</a></td>

                    <td>
                        <img src="../hotels/{{ $hotel->image }}" class="rounded-circle" width="50px" height="50px">
                    </td>

                    <td>{{ $hotel->price }}</td>

                    <td>{{ $hotel->category }}</td>

                    <td>{{ $hotel->type }}</td>

                    <td>
                        <a href="/back-panel/holiday/{{ $hotel->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                        <a href="holiday/{{ $hotel->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
