@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
</div>

<h3 class="text-center">Create a New User</h3>

<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter User Name" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-control" name="email" placeholder="Enter User Email" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="Enter User Password" required>
    </div>

    <div class="form-group">
        <label for="roles">Roles</label>
        <select name="role_id" id="roles" class="form-control">
            @foreach($roles as $role)
            <option class="text-uppercase" value="{{ $role->id }}">{{ strtoupper($role->name) }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary btn-block rounderd" type="submit" style="width: 100%">Save User</button>

</form>

@endsection
