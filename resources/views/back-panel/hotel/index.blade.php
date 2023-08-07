
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="/back-panel/hotel/create" class="btn btn-primary btn-sm rounded">Add New Hotel</a>

</div>

<div class="container"> 
    <h2>All Hotels</h2>   
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td><a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{ $hotel->name }}</a></td>

                    <td>
                        <img src="../hotels/{{ $hotel->image }}" class="rounded-circle" width="50px" height="50px">
                    </td>

                    <td>{{ $hotel->price }}</td>
                    
                    
                    <td>
                        <a href="/back-panel/hotels/{{ $hotel->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                        <a href="hotel/{{ $hotel->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection