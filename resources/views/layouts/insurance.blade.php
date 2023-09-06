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
                <img src="{{ asset('images/hotel.png') }}" alt="Flight Image" style="height: 69px; width: 126px;">
            </div>
            <div class="col-12 col-md-3 inline-div1">
                Travel Plan: Basic
                <p class="ab">Coverage for: 15 days</p>
                <p class="aa">Filter type: filter</p>
            </div>
            <div class="col-12 col-md-2 inline-div1">
                Insurance
                <p><button class="primary">Benefits</button></p>
            </div>
            <div class="col-12 col-md-2 inline-div1">
                Travel plan for
                <p class="ab">individual</p>
            </div>
            <div class="col-12 col-md-3 inline-div1">
                Insurance Charges
                <p class="ab">20000</p>
            </div>
        </div>
    </div>
    
    
    
 <div class="container mt-5">
    <h2>personal information</h2>
    <hr>


    <div class="container">
        
<div class="row">
    <div class="col-md-3">
        <input type="text" class="custom-input" placeholder="Customer name">
    </div>
    <div class="col-md-3">
        <input type="text" class="custom-input" placeholder="CNIC*" required>
    </div>
    <div class="col-md-3">
        <input type="text" class="custom-input" placeholder="Date of Birth*" required>
    </div>
    <div class="col-md-3">
        <input type="text" class="custom-input" placeholder="Father's Name">
    </div>
</div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Customer name">
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="CNIC*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Date of Birth*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Father's Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Customer name">
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="CNIC*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Date of Birth*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Father's Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Customer name">
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="CNIC*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Date of Birth*" required>
            </div>
            <div class="col-md-3">
                <input type="text" class="custom-input" placeholder="Father's Name">
            </div>
        </div>
    </div>
 </div>
 <div class="container mt-5">
    <h2>Add Beneficiary</h2>
    <hr>


    <div class="container">
        <div class="row">
            
            <div class="col-md-6 " >
                <input type="text" class="benifits1" placeholder="Beneficary Name*">
            </div>
            <div class="col-md-6 " >
                <input type="text" class="benifits1" placeholder="Benificary Relation*">
            </div>
            
           
        </div>
        
        </div>
        <div class="row">
            
            <div class="col-md-6 " >
                <input type="text" class="benifits2" placeholder="Benificary CNIC*">
            </div>
            <div class="col-md-6 ">
                <input type="text" class="benifits2" placeholder="Benificary Phone*">
            </div>
            
           
        </div>
        <div class="row">
            <div class="col-md-12"></div>
            <input type="text" class="lastinput" placeholder="Benificary Adress*">
        
        </div>
        <button class="primary2">SUBMIT APPLICATION</button>
        </div>
        
       
        
    </div>
 </div>







</main>
@include('layouts.footer')