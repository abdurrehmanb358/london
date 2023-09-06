
    @include('layouts.header')
    <main>
    
        <div class="container-fluid insur">
    
            

    <div class="container-fluid">

        <div class="container insutance">
            <div class="row">
                <div class="col-12 result" >

                    Insurance Search Result              
                  </div>
                  <div>
                <input type="text" class="searchinputs">
                  </div>
                  <div>
                    <input type="text" class="searchinputss">
                      </div>
            </div>
        </div>
    </div> -
        </div>
    
        <div class="container">
            @if ($insurances->isEmpty())
   <h1 style="text-align: center"> No insurance records found </h1>
@else
            @foreach ($insurances as $insur)
            <div class="row">
                <div class="col-12 col-md-2 inline-div1">
                    <img src="{{ asset('images/hotel.png') }}" alt="Flight Image" style="height: 69px; width: 126px;">
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Travel Plan: Basic
                    <p class="ab"> Coverage for:{{$insur->days}}days</p>
                    <p class="aa">Filter type: filter</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Insurance
                    <p><button class="primary">Benefits</button></p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Travel plan for
                    <p class="ab">{{$insur->travel_plan_for}}</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Insurance Charges
                    <p class="ab">{{$insur->insurance_charges}}</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    <a href="{{ route('layouts.subinsurance', ['id' => $insur->id]) }}" class="primary3">Apply Now</a>

                </div>
               
             
                
 



            </div>
            @endforeach
            @endif
        </div>
        <div class="centered-div">
            {{ $insurances->links() }}
        </div>
      
        
        
        
   
        
    
    
    </main>
    @include('layouts.footer')