@include('layouts.header')
<main>

    <div class="container-fluid insur">

        <div class="container insutance">
            <div class="row">
                <div class="col-12">
                    Apply for Travel Insurance
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2 inline-div1">
                <img src="../hotels/{{$insurances->imges }}" alt="Flight Image" style="height: 69px; width: 126px;">
            </div>
            <div class="col-12 col-md-3 inline-div1">
                Travel Plan: Basic
                <p class="ab">Coverage for: {{$insurances->days}}days
                </p>
                <p class="aa">Filter type: filter</p>
            </div>
            <div class="col-12 col-md-2 inline-div1">
                Insurance
                <button class="primary" type="button" data-toggle="modal" data-target="#myModal">Benefits</button>
            </div>
            <div class="col-12 col-md-2 inline-div1">
                Travel plan for
                <p class="ab">{{$insurances->travel_plan_for}}</p>
            </div>
            <div class="col-12 col-md-3 inline-div1">
                Insurance Charges
                <p class="ab"> {{$insurances->insurance_charges}} Rs</p>
            </div>
        </div>
    </div>
    
    
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">insurance Benifits</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                
                                {!!$insurances->Insurance_benefits!!}
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
    
 <div class="container mt-5">
    <h2>personal information</h2>
    <hr>


    <div class="container">
        <ul>  
        @foreach ($errors->all() as $error )
         
        <li>          
              {{$error}}
        </li>   
     
        @endforeach
    </ul>
       <form action="{{route('insurance.inquiry')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3 ">
                <input type="hidden" name="insurance_id" value="{{$insurances->id}}">
                <input type="text" class="custom-input" placeholder="Customer name" name="costomer_name">
            </div>
            <div class="col-md-3 ">
                <input type="text" class="custom-input" placeholder="CNIC*" name="CNIC" required>
            </div>
            <div class="col-md-3 ">
                <input type="text" class="custom-input " placeholder="Date of Birth*" 
                name="data_of_birth"
                required>
            </div>
            <div class="col-md-3 ">
                <input type="text" class="custom-input" placeholder="Father's Name"
                name="father_name">
            </div>
        </div>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="custom-input" placeholder="Mobil Number" name="Mobile_number">
                    </div>
                    <div class="col-md-3">
                        <input type="email" class="custom-input" placeholder="Email*" required name="Email">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="custom-input" placeholder="Gender" required name="gender">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="custom-input" placeholder="purppose_of_vist" name="purppose_of_vist">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 custom-input1">
                        <input type="text" class="custom-input" placeholder="Adress*"  name="adress">
                    </div>
                    <div class="col-md-3 custom-input1" >
                        <input type="text" class="custom-input" placeholder="Passport*" required name="passport">
                    </div>
                    <div class="col-md-3 custom-input1">
                        <input type="text" class="custom-input " placeholder="Depature_" name="Depature_date" required>
                    </div>
                    <div class="col-md-3 custom-input1">
                        <input type="text" class="custom-input" placeholder="Select country travel"  name="select_country_travel">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <input type="text" class="custom-input" placeholder="Airline" name="airline" required>
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" class="custom-input" placeholder="Number_of passenger*" required name="number_of_passengers">
                    </div>
                    <div class="col-md-3 custom-input1">
                        <input type="text" class="custom-input" placeholder="class*" required  name="class">
                    </div>
                    <div class="col-md-3 custom-input1">
                        <input type="text" class="custom-input" placeholder="price*" name="price">
                    </div>
                </div>
            </div>
         </div>
         <div class="container mt-5">
            <h2>Add Beneficiary</h2>
            <hr>
        
        
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 custom-input2 " >
                        <input type="text" class="benifits1" placeholder="Beneficary Name*" name="beneficiary_name" required67yhjy>
                    </div>
                    <div class="col-md-6 " >
                        <input type="text" class="benifits1" placeholder="Benificary Relation*" name="beneficiary_relation" required>
                    </div>
                    
                   
                </div>
                
                </div>
                <div class="row">
                    
                    <div class="col-md-6 " >
                        <input type="text" class="benifits2" placeholder="Benificary CNIC*" name="beneficiary_CNIC" required>
                    </div>
                    <div class="col-md-6 ">
                        <input type="text" class="benifits2" placeholder="Benificary Phone*" name="beneficiary_phone" required>
                    </div>
                    
                   
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <input type="text" class="lastinput" placeholder="Benificary Adress*" name="beneficiary_adress" required>
                
                </div>
                <button class="primary2">SUBMIT APPLICATION</button>
                </div>
           
      
    </form>
   


   
        
  






</main>
@include('layouts.footer')