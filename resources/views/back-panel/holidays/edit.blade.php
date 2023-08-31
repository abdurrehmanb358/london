@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('holiday.index') }}" class="btn btn-primary rounded">All Holidays</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <h3 class="text-muted">Holiday Edit # {{ $holidays->name }}</h3>
                <form method="POST" action="/back-panel/holiday/{{ $holidays->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control set" value="{{ old('name',$holidays->name) }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea class="form-control set" rows="4" name="description">{{ old('description',$holidays->description) }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Price</label>
                            <input type="text" name="price" class="form-control set" value="{{ old('price',$holidays->price) }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                    </div>

                    <div>
                        <label for="">Notes</label>
                        <textarea class="form-control set" rows="4" name="notes">   {{ old('notes',$holidays->notes) }}</textarea>
                        @if ($errors->has('notes'))
                            <span class="text-danger">{{ $errors->first('notes') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Category</label>
                        <input type="text" name="category" placeholder="Category"  value="{{ old('category',$holidays->category) }}">
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Type</label>
                        <input type="text" name="type" placeholder="Type"  value="{{ old('type',$holidays->type) }}">
                        @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        @endif
                    </div>

                    <button class="btn btn-dark sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
