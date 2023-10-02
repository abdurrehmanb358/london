
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<div class="d-flex justify-content-between">
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm rounded">Create New User</a>
    <div style="margin-right:60px ">
        <a href="" class="btn btn-primary btn-sm rounded">Expot file</a>
    
    </div>
</div>


<h2>All Users</h2>

<div class="table-responsive">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(isset($user->roles[0]))
                        {{ strtoupper($user->roles[0]->name) }}
                    @else
                        No Role Assigned
                    @endif
                </td>
                <td>
                    <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-warning btn-sm rounded">Edit</a>
                    <form action="{{ route('user.destroy', [$user->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No user found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
