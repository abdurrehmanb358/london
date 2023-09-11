@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex">
    <a href="{{ route('insurance.create') }}" class="btn btn-primary rounded">Add iInsurance</a>
</div>

<h2>All insurance</h2>

<div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>image</th>
                <th>Days</th>
                <th>travel_plan_for	</th>
                <th>insurance_charges</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($insurances as $insurance) 
            <tr>
                {{-- <td>
                    <img src="{{ asset('images/' . $flight->images) }}" alt="Flight Image" style="height:69px; width: 126px;">
                  </td> --}}

                <td> <img src="{{ asset('../hotels/' . $insurance->imges) }}" alt="Flight Image" style="height:69px; width: 126px;"></td>
                <td>{{$insurance->days}}</td>
                <td> {{$insurance->travel_plan_for}}</td>
                <td> Rs {{$insurance->insurance_charges}}</td>
              
               

                <td>
                    <a href="{{ route('insurance.edit', ['insurance' => $insurance->id]) }}" class="btn btn-warning btn-sm rounded">Edit</a>

                    <form action="{{ route('insurance.destroy',$insurance->id ) }}" method="POST" style="display: inline-block;">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">No insurance found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
