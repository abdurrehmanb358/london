@extends('back-panel.dashboard')

@section('content')
{{-- @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif --}}

<div class="d-flex justify-content-between">
    <a href="" class="btn btn-primary rounded">All insurance Pakages</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="" action="" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Days</label>
                        <input type="text" name="days"  value="">
                       
                    </div>

                    <div>
                        <label for="">Nights</label>
                        <input type="text" name="nights"  value="">
                       
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea class="form-control set" rows="4" name="discription">   </textarea>
                     
                    </div>

                    <div>
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" value="">
                        
                    </div>



                    <button class="btn btn-dark sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
