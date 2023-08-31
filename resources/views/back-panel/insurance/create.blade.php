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
                <form method="" action="{{route('insurance.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Days</label>
                        <input type="text" name="days"  value="">
                       


                    </div>
                    {{-- <th>sno.</th>
                    <th>images</th>
                    <th>days</th>
                    <th>travel_plan_for</th>
                    <th>insurance_Charges</th>
                    <th>Action</th> --}}
                    <div>
                        <label for="travel">Travel Plan</label>
                 <select name="travel" id="travel">
                     <option value="individual">Individual</option>
                      <option value="family">Family</option>
                      <option value="group">Group</option>
</select>
                       
                    </div>

                    <div>
                        <label for="">insurance_charges</label>
                        <input type="text" name="insuranc_charges"  value="">
                     
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
