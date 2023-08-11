 @include('layouts.header')
 <main class="home">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                 <img src="{{ asset('images/city.png') }}" alt="Bangkok" style="height: 320px; width: 100%;"
                     class="img-fluid">
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
                             <a class="nav-link active" data-toggle="tab" href="#flight"
                                 style="background-color:#000654; color:white;    
                        border: none; margin-top:-194px;    margin-left: 15px;
                    ">Search
                                 Flights</a>
                         </li>
                     </ul>
                   
                   
                   
                   
                   
                   
                   
                    <div class="tab-content">
                         <div class="tab-pane container active" id="flight" style="margin-top:-154px;">
                             <form action="{{ route('flight.search') }}" method="POST">
                                 @csrf
                                 <div class="form-row">
                                     <div class="form-group">
                                         <div class="custom-control custom-radio">
                                             <input type="radio" class="custom-control-input" id="roundTripRadio"
                                                 name="tripType" value="roundtrip">
                                             <label class="custom-control-label" for="roundTripRadio">Round Trip</label>
                                         </div>
                                         <div class="custom-control custom-radio">
                                             <input type="radio" class="custom-control-input" id="oneWayRadio"
                                                 name="tripType" value="oneway">
                                             <label class="custom-control-label" for="oneWayRadio">One Way</label>

                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-row">
                                     <div class="row">
                                         <div class="form-group col-sm-3">
                                             <label for="" class="label">Flying from</label>
                                             <input type="search" name="flying_from" class="form-control" value=""
                                                 name="" placeholder="City / Airport">
                                         </div>
                                         <div class="form-group col-sm-3">
                                             <label for="" class="label">Flying to</label>
                                             <input type="search" name="flying_to" class="form-control" value=""
                                                 name="" placeholder="City / Airport">
                                         </div>
                                         <div class="form-group col-sm-3">
                                             <label for="" class="label">Departing</label>
                                             <input type="" name="departing" class="form-control" value=""
                                                 name="" placeholder="City / Airport">
                                         </div>
                                         <div class="form-group col-sm-3">
                                             <button type="search" class="controle">Search</button>
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
             <div class="col-4">
                 <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                 <img src="{{ asset('images/logo2.png') }}" alt="Bangkok"
                     style="height: 664px;float:right;margin-top:172px; " class="img-fluid">
             </div>
             <div class="col-8">
                 <h2 class="b22">Flight Detail</h2>

                 <table style="width: 80%; border-collapse: collapse; border: 1px solid #ddd;">
                     <tr>
                         <th class="th1"> Airline</th>
                         <th class="th2">Departure</th>
                         <th class="th3"></th>
                         <th class="th4"> Arrive</th>
                         <th class="th5">Fare</th>
                     </tr>
                     <tr>
                         <td style="padding: 8px;  text-align: center;">
                             <img src="{{ asset('images/' . $flight->images) }}" alt="Flight Image"
                                 style="height:69px; width: 126px;">
                         </td>
                         <td style="padding: 8px;  text-align: center;">
                             {{ $flight->flying_from }}
                             <p style="margin: 0; font-size: 12px;"><?php echo date('F j, Y', strtotime($flight->departing)); ?></p>
                         </td>
                         <td style="padding: 8px;  text-align: center;">
                             <i class="fas fa-exchange-alt" id="directionIcon"></i>
                         </td>
                         <td style="padding: 8px;  text-align: center;">
                             {{ $flight->flying_to }} <p style="margin: 0; font-size: 12px;"> <?php echo date('F j, Y', strtotime($flight->returning)); ?></p>
                         </td>
                         <td style="padding: 8px;  text-align: center;">{{ $flight->price }}</td>
                     </tr>
                 </table>
                 <p style="width: 78%;">{{ $flight->message }} </p>
                 <div>

                     <h3 class="top">Flight Inquery!</h3>

                     <form action="" method="post">
                         @csrf
                         <div class="">
                             <div style="margin-bottom: 20px;">
                                 <input type="text" name="first_name" class="row1" placeholder="First Name">
                                 <input type="text" name="last_name" id="" class="row1"
                                     placeholder="Last Name">
                                 <input type="email" name="email" id="" class="row1"
                                     placeholder="Email">
                             </div>

                             <div style="margin-bottom: 20px;">
                                 <input type="text" name="phone_number" id="" class="row2"
                                     placeholder="Phone Number">
                                 <input type="text" name="destination" id="" class="row2"
                                     placeholder="Destination">
                             </div>
                             <div style="margin-bottom: 20px;">
                                 <input type="text" name="form" class="row3" placeholder="Form">
                                 <input type="date" name="date_of_departure" id="" class="row3"
                                     placeholder="Date of Departure">
                                 <input type="date" name="date_of_arrivel" id="" class="row3"
                                     placeholder="DatofArrivel">
                             </div>
                             <div style="margin-bottom: 20px;">
                                 <input type="text" name="airline" class="row4"placeholder="Airline">
                                 <input type="text" name="number of passenger" id="" class="row4"
                                     placeholder="number_of_passenger">
                                 <input type="text" name="class" id="" class="row4"
                                     class="row4"placeholder="Class">
                             </div>
                             <div>
                                 <textarea name="message" id="" class="text" rows="30" cols="50" placeholder="message"></textarea>

                             </div>
                             <div class="button-group">
                                 <button>SUBMIT</button>

                             </div>



                     </form>

                 </div>
             </div>

         </div>
     </div>





     <script>







$(document).ready(function () {
            $('.custom-control-input').on('change', function () {
                var tripType = $(this).val();
        
                $.ajax({
                    url: "{{ route('get.flights') }}",
                    method: "GET",
                    data: { tripType: tripType },
                    success: function (data) {
                        // Output the received data to the browser console
                        console.log(data);
                        
                        // Update the UI with fetched flight data (data)
                        // Example: Update a table with flight information
                    },
                    
                    error: function () {
                        // Handle errors if needed
                        console.log('An error occurred during the Ajax request.');
                    }
                });
            });
        });
        





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
 @include('layouts.footer')
