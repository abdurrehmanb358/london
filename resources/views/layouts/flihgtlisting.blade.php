@include('layouts.header')




<main class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <img src="{{ asset('images/city.png') }}" alt="Bangkok" style="height: 320px; width: 100%;" class="img-fluid">
            </div>
        </div>
    </div>
   
    <div class="content_wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#flight" style="background-color:#000654; color:white;    
                        border: none; margin-top:-194px;    margin-left: 15px;
                    ">Search Flights</a>
                    </li>
               
                  
                  
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div class="tab-pane container active" id="flight" style="margin-top:-154px;">
                        <form action="{{route('flight.search')}}">
                            <div class="form-row">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="roundTripRadio" name="tripType" value="">
                                        <label class="custom-control-label" for="roundTripRadio">Round Trip</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="oneWayRadio" name="tripType" value="customEx">
                                        <label class="custom-control-label" for="oneWayRadio">One Way</label>
                                       
                                    </div>

                       
                                    
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Flying from</label>
                                        <input type="text"  name="search" class="form-control" value="" name="" placeholder="City / Airport">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Flying to</label>
                                        <input type="text"  name="search" class="form-control" value="" name="" placeholder="City / Airport" >
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Departing</label>
                                        <input type="text"  name="search" class="form-control" value="" name="" placeholder="City / Airport">
                                    </div>
                                    <div class="form-group col-sm-3">
                                       
                                        <button class="controle" type="submit">Search</button>
                                    </div>
                                </div>
                                
                            
                              
                             
                            </div>
                              
                        </form>
                    </div>
                   
                
                       


                    <div class="tab-pane container fade" id="vacations">...</div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>

<div class="container ">
    <div class="col-12 ">
        <h2 class="gg">Internatinal flight</h2>
<hr>

        <p>Travelling internationally can be stressful because of high ticket price.Vist our website to find some of the best internatonal flight deals on internet.</p>    
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card1">
                <h3>
                    <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                </h3>
                <p class="bb">Best Prices Guranteed</p>
                <p>we always Guranteed you travel for less with then best price on flight,Hotal & vacation</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card1">
                <h3>
                    <div class="icon">&#128722;</div>
                </h3>
                <p class="bb">Statisfied Customers</p>
                <p >we hold our values tight we have Millons of Satatfied Costomer worldwide</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card1">
                <h3>
                    <div class="icon">&#128722;</div>
                </h3>
                <p class="bb">Exculsive Deals</p>
                <p>Exculsive Airfare Content , and insider Consolider Deals which no one else can offer. </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card1">
                <h3>
                    <div class="icon">&#128722;</div>
                </h3>
                <p class="bb">Customer service</p>

                <p>Our trip Experts are well versed and committed to provide you the base-in-class service in the quickest way.</p>
            </div>
        </div>
    </div>
    

        
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="row">
            <div class="col-3">


                <img src="{{ asset('images/logo2.png') }}" alt="Bangkok" style="height: 664px;float:right;margin-top:153px; " class="img-fluid" >

            </div>
           
           
           
           
            <div class="col-9 mt-7" style="margin-top: 78px
            ">
                 <h2>
                    Popular Flight
                    {{-- <hr class="h2"> --}}
                 </h2>
             
            
                <table style="width: 90%; border-collapse: collapse; border: 1px solid #ddd;">
                    <tr>
                        <th class="th1">Airline</th> 
                        <th  class="th2">Departure</th>
                        <th  class="th3"></th>
                        <th class="th4"> Arrive</th>
                        <th class="th5">Fare</th>
                            <th class="th5">Book online</th>

                            {{-- <th
                            style="width: 20%; padding-left: -3px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            <button>Book Now</button></th> --}}
                         
                            <tr>
                                <td style="padding: 8px; text-align: center;">
                                    <img src="{{ asset('images/' . $flight->images) }}" alt="Flight Image"
                                    style="height:69px; width: 126px;">
                                </td>
                                <td style="padding: 8px; text-align: center;">
                                 
                                    <p style="margin: 0; font-size: 12px;"></p>
                                </td>
                                <td style="padding: 8px; text-align: center;">
                                    <i class="fas fa-exchange-alt" id="directionIcon"></i>
                                </td>
                                <td style="padding: 8px; text-align: center;">
                                                     <p style="margin: 0; font-size: 12px;">  ?></p>
                                </td>
                                <td style="padding: 8px; text-align: center;">
                                <td style="padding: 8px; text-align: center;">
                                    <a href="" target="_blank">Book Now</a>
                                </td>
                            </tr>
                         
                
                <p style="width: 78%;"> </p>
                <div>

        

 
                </div>
            </div>

            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const oneWayRadio = document.getElementById("oneWayRadio");
                const roundTripRadio = document.getElementById("roundTripRadio");
                const directionIcon = document.getElementById("directionIcon");
        
                function updateDirectionIcon() {
                    if (oneWayRadio.checked) {
                        directionIcon.classList.remove("fa-exchange-alt");
                        directionIcon.classList.add("fa-long-arrow-alt-right");
                    } else if (roundTripRadio.checked) {
                        directionIcon.classList.remove("fa-long-arrow-alt-right");
                        directionIcon.classList.add("fa-exchange-alt");
                    }
                }
        
                oneWayRadio.addEventListener("change", updateDirectionIcon);
                roundTripRadio.addEventListener("change", updateDirectionIcon);
            });
        </script>
    

</main>


{{-- @include('layouts.footer') --}}






