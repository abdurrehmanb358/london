
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
                    <img src="../hotels/{{ $insur->imges }}" alt="Flight Image" style="height: 69px; width: 126px;">
               
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Travel Plan: Basic
                    <p class="ab"> Coverage for:{{$insur->days}}days</p>
                    <p class="aa">Filter type: filter</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Insurance
                                              <p>  <button class="primary" type="button" data-toggle="modal" data-target="#myModal">Benefits</button>
                                            </p>
                                            
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Travel plan for
                    <p class="ab">{{$insur->travel_plan_for}}</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    Insurance Charges
                    <p class="ab">{{$insur->insurance_charges}} Rs</p>
                </div>
                <div class="col-12 col-md-2 inline-div1">
                    <a href="{{ route('layouts.subinsurance', ['id' => $insur->id]) }}" class="primary3">Apply Now</a>

                </div>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">insurance Benifits</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                
                                {!!$insur->Insurance_benefits!!}
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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