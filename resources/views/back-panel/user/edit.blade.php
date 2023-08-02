
@extends('back-panel.dashboard');
 @section('content')

<div class="d-flex justify-content-between">
    <a href="{{route('user.index')}}" class="btn btn-primary rounded">All Users</a>
</div>

<h3 class="text-center">Update User {{$user->name}}</h3>
<form action="{{ route('user.update', [$user->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter User Name"
            value="{{ $user->name }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-control" name="email" placeholder="Enter User Email"
            value="{{ $user->email }}" required>
    </div>

    <div class="form-group">
        <label for="roles">Roles</label>
        <select name="role_id" id="roles_id" class="form-control">
            @foreach($roles as $role)
            <option class="text-uppercase" value="{{ $role->id }}" @if ($role->id === optional($user)->role_id) selected @endif>
                {{ strtoupper($role->name) }}
            </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary btn-block rounderd" type="submit" style="width: 100%">Update User</button>
</form>



@endsection