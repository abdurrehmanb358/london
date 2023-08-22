@include('layouts.header')
<main>

    <div class="container-fluid    searchcontanier">

        <div class="container insutance">
            <div class="row">
                <div class="col-12">

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
</main>
@include('layouts.footer')