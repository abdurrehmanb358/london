@include("layouts.header")

<main>
    <div class="container-fluid" style="display: contents">
        <img src="{{ asset('images/Hotel2.png') }}" class="img-set">
    </div>
<div class="container" id="hotels-container">
        <div class="left-container">
            <div class="row">
                <div class="col-sm-12 con-upper">
                        <div  id="search-br">
                            <label class="cl-t">Search By Name</label>
                            <input type="text" name="search" id="search" style="border: #EDEDED; outline:none;background:#FFFFFF" placeholder="Search">
                        </div>

                        <div id="search-br">
                            <label class="cl-t">Price Range</label>
                            <input type="text" id="price" name="price" readonly style="border:none; margin-bottom:10px">
                            <div id="slider-3"></div>
                        </div>

                        <div class="star">
                            <label class="cl-t" style="margin-right: 107px">Star Rating</label>
                            <div class="rating text-warning">
                                @for ($i = 5; $i > 0; $i--)
                                    @for ($j = $i; $j > 0; $j--)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    <br>
                                @endfor
                            </div>
                        </div>

                </div>
            </div>
        </div>




        <div class="right-container" id="searchResult">
            @foreach ($hotels as $hotel)
                <div class="row">
                    <div class="col-12 pl-0" style="border: 1px solid #F0F0F0; margin-top:30px" id="abc">
                        <div class="row">
                            <div class="col-sm-3   con-img" style="display: flex">
                                <img src="../hotels/{{ $hotel->image }}" style="width: inherit" class="img">
                            </div>

                            <div class=" col-sm-6 con-part">
                                <h2>
                                    <a href="/Hotel_listing/{{ $hotel->id}}/Hotel_details" class="text-dark">{{ $hotel->name }}</a>
                                </h2>

                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-map-marker-alt ml-3 text-dark"></i>
                                    <span class="text-dark">{{$hotel->city . ',' . $hotel->country}}</span>
                                </div>
                                <br>

                                <div class="con-star" style="display: grid; margin-left:-15px" >
                                    <div class="custom-card px-3" style="margin-bottom: 3px">
                                        <i class="fas fa-car"></i>
                                        <span>Car Park</span>
                                    </div>

                                    <div class="custom-card px-3" style="margin-bottom: 3px">
                                        <i class="fas fa-utensils"></i>
                                        <span>Restaurant</span>
                                    </div>

                                    <div class="custom-card px-3">
                                        <i class="fas fa-wifi"></i>
                                        <span>Wi-Fi</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-sm-3 select-set">
                                <h3 class="con-h3">${{ $hotel->price }}</h3>
                                <button class="custom-button" style="width: 150px"><a href="/Hotel_listing/{{ $hotel->id}}/Hotel_details" style="color: white">SELECT</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
<div class="mt-10" style="text-align: center;margin-top:30px">
    {{ $hotels->links()}}
</div>
</main>


<script>
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function myData() {
    $.ajax({
        url: "search",
        method: "POST",
        data: JSON.stringify({
            inputSearch:$("#search").val(),
            newSearch: $("#price").val()
        }),
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        success: function (data) {
                var hotelsHtml = '';
                data = JSON.parse(data);
                console.log(data);
                $('#searchResult').show();

                data.forEach(function (hotel) {
                    var hotelHtml = `
                        <div class="col-12 pl-0" style="border: 1px solid #F0F0F0; margin-top:30px">
                            <div class="row">
                                <div class="col-3" style="display: flex">
                                    <img src="../hotels/${hotel.image}" style="width: inherit">
                                </div>
                                <div class="col-md-6 col-sm-7 con-part">
                                    <h2>
                                        <a href="/layouts/${hotel.id}/show" class="text-dark">${hotel.name}</a>
                                    </h2>
                                    <div class="rating text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-map-marker-alt ml-3 text-dark"></i>
                                        <span class="text-dark">${hotel.city + ', ' + hotel.country}</span>
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
                                    <h3>${hotel.price}</h3>
                                    <button class="custom-button" style="width: 150px">Select</button>
                                </div>
                            </div>
                        </div>
                    `;
                    hotelsHtml += hotelHtml;
                });
if(hotelsHtml){
    $('#searchResult').html(hotelsHtml);

}else{

 var error = `<div class="col-12 pl-0" style="border: 1px solid #F0F0F0; margin-top:30px">
    <div class="row">
                                <div class="col-3" style="display: flex">
                                </div>
                                <div class="col-6">
                          <h2>No Record Found</h2>       </div>
                                <div class="col-3">

                                </div>
                            </div>
                        </div>`;

    $('#searchResult').html(error);
}
            }
    });
}



$("#search").on("keyup", function () {
    $inputSearch = $(this).val();
    myData();
});

$("#slider-3").slider({
    range: true,
    min: 1000,
    max: 20000,
    values: [0, 16000],
    slide: function (event, ui) {
        $("#price").val("$" + ui.values[0] + " - $" + ui.values[1]);
        // Call myData() only when the user stops sliding (e.g., using a timeout)
        clearTimeout(window.sliderTimeout);
        window.sliderTimeout = setTimeout(function () {
            myData();
        }, 300); // Adjust the timeout duration as needed
    }
});

// Initialize the input field with the initial values
var initialMinValue = $("#slider-3").slider("values", 0);
var initialMaxValue = $("#slider-3").slider("values", 1);
$("#price").val("$" + initialMinValue + " - $" + initialMaxValue);



</script>

@include("layouts.footer")
