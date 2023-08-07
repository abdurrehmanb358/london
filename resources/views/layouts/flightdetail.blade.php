 @include('layouts.header')




<main class="home">
  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-4">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <img src="{{ asset('images/city.png') }}" alt="Bangkok" style="height: 320px;" class="img-fluid">

            </div>
        </div>
    </div>
   

      <div class="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 left_col">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#flight" style="background-color:#000654; color:white;     margin: -1px -17px -2px 24px;
                        border: none;
                    }">Search Flights</a>
                    </li>
               
                  
                  
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div class="tab-pane container active" id="flight">
                        <form action="">
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
                                    
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Flying from</label>
                                        <input type="text" class="form-control" value="" name="" placeholder="City / Airport">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Flying to</label>
                                        <input type="text" class="form-control" value="" name="" placeholder="City / Airport" >
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="" class="label">Departing</label>
                                        <input type="text" class="form-control" value="" name="" placeholder="City / Airport">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <button class="controle">Search</button>
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

<div class="contanier">
    
        <div class="row">
            <div class="col-4"></div>
           
           
           
           
            <div class="col-8">
                 <h2>Flight Detail</h2>

                <table style="width: 80%; border-collapse: collapse; border: 1px solid #ddd;">
                    <tr>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Airline</th>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Departure</th>
                        <th
                            style="width: 21%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                        </th>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Arrive</th>
                        <th
                            style="width: 30%; padding-left: -3px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Fare</th>
                    </tr>
                    <tr>
                        <td style="padding: 8px;  text-align: center;">  <img src="{{ asset('images/' . $flight->images) }}" alt="Flight Image" style="height:69px; width: 126px;"></td>
                        <td style="padding: 8px;  text-align: center;">
                                             {{$flight->flying_from}}
                                             <p style="margin: 0; font-size: 12px;"><?php echo date('F j, Y', strtotime($flight->departing)); ?></p>


                            </p>
                        </td>
                        <td style="padding: 8px;  text-align: center;">
                            <i class="fas fa-exchange-alt" id="directionIcon"></i>
                        </td>
                        <td style="padding: 8px;  text-align: center;">
                          {{$flight->flying_to}}                            <p style="margin: 0; font-size: 12px;"> <?php echo date('F j, Y', strtotime( $flight->returning )); ?></p>
                        </td>
                        <td style="padding: 8px;  text-align: center;">{{$flight->price}}</td>
                    </tr>
                </table>
                <p style="width: 78%;">{{$flight->message}} </p>
                <div>

                    <h5>Flight Inquery</h5>

                    <form action="{{route('inquiry.store')}}" method="post" >
                       @csrf
                        <div class="">
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="first_name"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="First Name">
                                <input type="text" name="last_name" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Last Name">
                                <input type="email" name="email" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Email">
                            </div>

                            <div style="margin-bottom: 20px;">
                               
                                <input type="text" name="phone_number" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: -4px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Phone Number">
                                <input type="text" name="destination" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Destination">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="form"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Form">
                                <input type="date" name="date_of_departure" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Date of Departure">
                                <input type="date" name="date_of_arrivel" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Date ofArrivel">


                            </div>
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="airline"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Airline">
                                <input type="text" name="number of passenger" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="number_of_passenger">
                                <input type="text" name="class" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Class">


                            </div>
                            <div>
                                <textarea name="message" id=""
                                    style="width: 79%; height: 139px; margin-top: -11px;  border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    rows="30" cols="50" placeholder="message"></textarea>

                            </div>
                            <div class="button-group">
                                <button>SUBMIT</button>

                            </div>



                    </form>

                </div>
            </div>

            </div>
        </div>

    

</main>
@include('layouts.footer')






