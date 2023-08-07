@include("layouts.header")

<main>
    <div class="container-fluid" style="display: contents">
        <img src="images\Hotel2.png" class="img-set">
    </div>

    <div class="container">
        <div class="row">
                <div class="col-3">
                    <div class="wrapper">
                        <div style="color: #000655">Search By name</div>
                        <input type="text" placeholder="Search">
                    </div>  
                    <div>        
                        <script>
                            $(document).ready(function () {
                                $("#slider-3").slider({
                                    range: true,
                                    min: 1000,
                                    max: 20000,
                                    values: [4000, 16000],
                                    slide: function (event, ui) {
                                        $("#price").val("$" + ui.values[0] + " - $" + ui.values[1]);
                                    }
                                });
                    
                                // Initialize the input field with the initial values
                                var initialMinValue = $("#slider-3").slider("values", 0);
                                var initialMaxValue = $("#slider-3").slider("values", 1);
                                $("#price").val("$" + initialMinValue + " - $" + initialMaxValue);
                            });
                        </script>

                        <p>
                        <input type="text" id="price" readonly>
                        </p>
                        <div id="slider-3"></div>
                        <div>kwjkefkjqlbdjflqefjb
                            
                        </div>
                    </div>
                </div>
               
            </div>     
            
            @foreach ($hotels as $hotel )  
            
                <div class="col-9 pl-0 " style="border: 1px solid #F0F0F0; margin-top:30px">
                    <!-- Hotel image and information -->
                    <div class="row ">
                        <div class="col-3" style="display: flex">
                            <img src="../hotels/{{ $hotel->image }}" style="width: inherit">
                        </div>

                        <div class="col-6">
                            <h2>
                                <a href="/layouts/{{ $hotel->id}}/show" class="text-dark">{{$hotel->name}}</a>
                            </h2>

                            <div class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-map-marker-alt ml-3 text-dark"></i>
                                <span class="text-dark">dubai</span>
                            </div>                       
                            <br>
                                <div class="custom-card px-3">
                                    <i class="fas fa-car"></i>
                                    <span>Car Park</span>
                                </div>
                            <br>
                                <div class="custom-card px-3">
                                    <i class="fas fa-utensils"></i>
                                    <span>Restaurant</span>
                                </div>
                            <br>
                                <div class="custom-card px-3">
                                    <i class="fas fa-wifi"></i>
                                    <span>Wi-Fi</span>
                                </div>
                        </div>

                        <div class="col-3 select-set">
                            <h3>{{$hotel->price}}</h3>
                            <button class="custom-button" style="width: 150px">Select</button>
                        </div>

                    </div>
                </div>
        @endforeach
    </div>
</div>
      
</main>


@include("layouts.footer")