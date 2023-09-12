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
                <h3 class="text-muted">Pakage Edit</h3>
                <form method="POST" action="/back-panel/umrah_pakage/{{ $umrah->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="">days</label>
                        <input type="text" name="days" class="form-control set" value="{{ old('days',$umrah->days) }}">
                        @if ($errors->has('days'))
                            <span class="text-danger">{{ $errors->first('days') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Nights</label>
                        <input type="text" name="nights" class="form-control set" value="{{ old('nights',$umrah->nights) }}">
                        @if ($errors->has('nights'))
                            <span class="text-danger">{{ $errors->first('nights') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">discription</label>
                        <textarea class="form-control set" rows="4" name="discription">{{ old('discription',$umrah->discription) }}</textarea>
                        @if ($errors->has('discription'))
                            <span class="text-danger">{{ $errors->first('discription') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image1</label>
                        <input type="file" name="image1" class="form-control" value="{{ old('image1') }}">
                        @if ($errors->has('image1'))
                            <span class="text-danger">{{ $errors->first('image1') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image2</label>
                        <input type="file" name="image2" class="form-control" value="{{ old('image2') }}">
                        @if ($errors->has('image2'))
                            <span class="text-danger">{{ $errors->first('image2') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Image3</label>
                        <input type="file" name="image3" class="form-control" value="{{ old('image3') }}">
                        @if ($errors->has('image3'))
                            <span class="text-danger">{{ $errors->first('image3') }}</span>
                        @endif
                    </div>

                    {{-- <div>
                        <label for="">Price</label>
                            <input type="text" name="price" class="form-control set" value="{{ old('price',$umrah->price) }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                    </div>

                    <div>
                        <label for="">Notes</label>
                        <textarea class="form-control set" rows="4" name="notes">   {{ old('notes',$umrah->notes) }}</textarea>
                        @if ($errors->has('notes'))
                            <span class="text-danger">{{ $errors->first('notes') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">City</label>
                        <input type="text" placeholder="City" name="city" class="form-control set" value="{{ old('city',$umrah->city) }}">
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="">Country</label>
                        <input type="text" placeholder="Country" name="country" class="form-control set" value="{{ old('country',$umrah->country) }}">
                        @if ($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        @endif
                    </div> --}}

                    <button class="btn btn-dark sm" type="submit" value="upload">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
