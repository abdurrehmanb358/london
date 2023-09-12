@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="{{ route('umrah.index') }}" class="btn btn-primary rounded">All Pakages</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action="/back-panel/umrah_pakage/store" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Days</label>
                        <input type="text" name="days"  value="{{ old('days') }}">
                        @if ($errors->has('days'))
                            <span class="text-danger">{{ $errors->first('days') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Nights</label>
                        <input type="text" name="nights"  value="{{ old('nights') }}">
                        @if ($errors->has('nights'))
                            <span class="text-danger">{{ $errors->first('nights') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea class="form-control set" rows="4" name="discription">   {{ old('discription') }}</textarea>
                        @if ($errors->has('discription'))
                            <span class="text-danger">{{ $errors->first('discription') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image 1</label>
                        <input type="file" name="image1" class="form-control" value="{{ old('image1') }}">
                        @if ($errors->has('image1'))
                            <span class="text-danger">{{ $errors->first('image1') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image 2</label>
                        <input type="file" name="image2" class="form-control" value="{{ old('image2') }}">
                        @if ($errors->has('image2'))
                            <span class="text-danger">{{ $errors->first('image2') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image 3</label>
                        <input type="file" name="image3" class="form-control" value="{{ old('image3') }}">
                        @if ($errors->has('image3'))
                            <span class="text-danger">{{ $errors->first('image3') }}</span>
                        @endif
                    </div>

{{--
                    <div>
                        <label for="">Notes</label>
                        <textarea class=" set" rows="4" name="notes">   {{ old('notes') }}</textarea>
                        @if ($errors->has('notes'))
                            <span class="text-danger">{{ $errors->first('notes') }}</span>
                        @endif
                    </div> --}}
{{--
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
                    </div> --}}

                    <button class="btn btn-dark sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
