@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('hotel.index') }}" class="btn btn-primary rounded">All Hotels</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action="/back-panel/hotel/store" enctype="multipart/form-data">
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
                        <label for="">City</label>
                        <input type="text" name="city" placeholder="City"  value="{{ old('city') }}">
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Country</label>
                        <input type="text" name="country" placeholder="Country"  value="{{ old('country') }}">
                        @if ($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        @endif
                    </div>

                    <button class="btn btn-dark sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
