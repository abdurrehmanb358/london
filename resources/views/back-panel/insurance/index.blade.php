@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex">
    <a href="{{ route('insurance.create')}}" class="btn btn-primary rounded">Add insurance</a>
</div>

<h2>All insurance</h2>

<div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>sno.</th>
                <th>images</th>
                <th>days</th>
                <th>travel_plan_for</th>
                <th>insurance_Charges</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse() --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-warning btn-sm rounded">Edit</a>
                    <form action="" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            {{-- @empty --}}
            <tr>
                <td colspan="11">No insurance found</td>
            </tr>
            {{-- @endforelse --}}
        </tbody>
    </table>
</div>
@endsection
