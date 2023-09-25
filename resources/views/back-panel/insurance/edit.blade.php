@extends('back-panel.dashboard')

@section('content')
{{-- @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif --}}

<div class="d-flex justify-content-between">
    <a href="{{ route('insurance.index')}}" class="btn btn-primary rounded">All insurance Pakages</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action="{{route('insurance.update' , [$Insurance->id])}} " enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <label for="email">image</label>
                    <input type="file" id="email" class="form-control" name="image">
                </div>
                    <div>
                        <label for="">Days</label>
                        <input type="text" name="days"  value="{{$Insurance->days}}">
                       


                    </div>
                   
                    <div>
                        <label for="travel">Travel Plan</label>
                 <select name="travel" id="travel">
                     <option value="individual">Individual</option>
                      <option value="family">Family</option>
                      <option value="group">Group</option>
</select>
                       
                    </div>
                    <div>
                        <label for="message">Insurance_banefits</label>
                        <textarea name="message" id="message"
                            style="width: 100%; height: 169px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                             rows="4" cols="50">{{$Insurance->Insurance_benefits}}</textarea>
                    </div>


                    <div>
                        <label for="">insurance_charges</label>
                        <input type="text" name="insuranc_charges"  value="{{$Insurance->insurance_charges}}">
                     
                    </div>

                    



                    <button class="btn btn-dark sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
