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
            <div class="col-2 inline-div1">
                <img src="{{ asset('images/hotal.png') }}" alt="Flight Image" style="height:69px; width: 126px;">
            </div>
            <div class="col-3 inline-div1">
                Travel Plan:Basic
                <p class="ab">Coverge for:15days</p>
                <p class="aa">Filer type:filer</p>

            </div>
            <div class="col-2 inline-div1">
                insurance
                <p><button class="primary">Benefits</button></p>

            </div>
            <div class="col-2 inline-div1" >
                Travel plan for
                <p class="ab">indivdual</p>


            </div>
            <div class="col-3 inline-div1">
                insurance Charges
                <p class="ab">20000</p>
            </div>


        </div>
 </div>
 <div class="container mt-5">
    <h2>personal information</h2>
    <hr>


    <div class="container">
        <div class="row">
            
            <div class="col-3 div-col">
                <input type="text" placeholder="Constomer name:">
            </div>
            <div class="col-3 div-col">
                <input type="text"placeholder="CNIC:*" >
            </div>
            <div class="col-3 div-col"  >
                <input type="text"placeholder="Date of Birth*">
            </div>
            <div class="col-3 div-col" >
                <input type="text" placeholder="Father's Name">
           
        </div>
        </div>
        <div class="row">
            
            <div class="col-3 div-col">
                <input type="text" placeholder="Mobile Number*">
            </div>
            <div class="col-3 div-col">
                <input type="text" placeholder="Email*">
            </div>
            <div class="col-3 div-col">
                <input type="text" placeholder="Gender*">
            </div>
            <div class="col-3 div-col">
                <input type="text" placeholder="purpose of visit*:">
           
        </div>
        </div>
        <div class="row">
            
            <div class="col-3 div-col">
                <input type="text" placeholder="Adress*">
            </div>
            <div class="col-3 div-col">
                <input type="text" placeholder="passport*">
            </div>
            <div class="col-3 div-col">
                <input type="text"  placeholder="travel*:">
            </div>
            <div class="col-3 div-col ">
                <input type="text" placeholder="Date of Birth*:">
           
        </div>
        
        </div>
        <div class="row">
            
            <div class="col-3 div-col" >
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col ">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
           
        </div>
        
        </div>
    </div>
 </div>
 <div class="container mt-5">
    <h2>Add Beneficiary</h2>
    <hr>


    <div class="container">
        <div class="row">
            
            <div class="col-3 div-col" >
                <input type="text1" class="insurance-inputs">
            </div>
            <div class="col-3 div-col">
                <input type="text" class="insurance-inputs" >
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
           
        </div>
        </div>
        <div class="row">
            
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
           
        </div>
        </div>
        <div class="row">
            
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
            </div>
            <div class="col-3 div-col">
                <input type="text">
           
        </div>
        
        </div>
        
    </div>
 </div>






</main>
@include('layouts.footer')