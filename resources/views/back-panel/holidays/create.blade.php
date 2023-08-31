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
                <form method="POST" action="/back-panel/holiday/store" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name"  value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea class="form-control set" rows="4" name="description">   {{ old('description') }}</textarea>
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
                        <label>Price</label>
                            <input type="text" name="price" class="form-control set" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                    </div>

                    <div>
                        <label for="">Notes</label>
                        <textarea class=" set" rows="4" name="notes">   {{ old('notes') }}</textarea>
                        @if ($errors->has('notes'))
                            <span class="text-danger">{{ $errors->first('notes') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Category</label>
                        <input type="text" name="category" placeholder="Category"  value="{{ old('category') }}">
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Type</label>
                        <input type="text" name="type" placeholder="Type"  value="{{ old('type') }}">
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
