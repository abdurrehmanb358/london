 @include('layouts.header')


<main class="home">
    <!-- Section Banner Starts Here -->
    <section class="banner">
            <div class="banner_slider owl-carousel owl-theme">
                <div class="item">
                    <div class="bannerImage">
                        <img src="{{asset('images/slider-1.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="bannerImage">
                        <img src= "{{asset('images/slider-1.jpg')}}" alt="image">
                    </div>

                </div>
                <div class="item">
                    <div class="bannerImage">
                        <img src= "{{asset('images/slider-1.jpg')}}" alt="image">

                    </div>

                </div>
            </div>
            <!-- Only for Mobile and tab -->
            <div class="mobile_caption d-block d-lg-none">
                <p class="title">Exclusive Phone Only</p>
                <p class="subtitle">Flight Deals!</p>
                <p class="phone_no"><i class="fas fa-phone"></i> (042) 3578 1551</p>
                <span>Call our travel expert now</span>
            </div>
            <!-- Only for Mobile and tab -->

            <div class="content_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 left_col">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#flight">Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#hotels">Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#vacations">Vacations</a>
                            </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                            <div class="tab-pane container active" id="flight">
                                <form action="{{route('flight_listing')}}" id="searchForm">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="roundTripRadio" name="tripType" value="customEx" checked>
                                                <label class="custom-control-label" for="roundTripRadio">Round Trip</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="oneWayRadio" name="tripType" value="customEx">
                                                <label class="custom-control-label" for="oneWayRadio">One Way</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Flying from</label>
                                            <input type="text" class="form-control" value="" name="flying_from" placeholder="City / Airport">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Flying to</label>
                                            <input type="text" class="form-control" value="" name="flying_to" placeholder="City / Airport">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Departing</label>
                                            <input type="text" class="form-control" value="" name="departing" placeholder="City / Airport">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Returning</label>
                                            <input type="text" class="form-control" value="" name="" placeholder="City / Airport">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-4 pr-lg-1">
                                                    {{-- <label for="">Adults</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">0</option>
                                                    </select> --}}
                                                </div>
                                                <div class="col-lg-4 pl-lg-1 pr-lg-1">
                                                    {{-- <label for="">Children</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">0</option>
                                                    </select> --}}
                                                </div>
                                                <div class="col-lg-4 pl-lg-1">
                                                    {{-- <label for="">infants</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">0</option>
                                                    </select> --}}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-6 pr-lg-1">
                                                    {{-- <label for="">Class</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Business</option>
                                                    </select> --}}
                                                </div>
                                                <div class="col-lg-6 pl-lg-1">
                                                    {{-- <label for="">Prefered Airline</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">ABC</option>
                                                    </select> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <button type="submit" class="btn_submit_inquiry">search Flight </button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane container fade" id="hotels">
                                <form action="{{ route('layouts.Hotel_listing') }}">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" value="" name="country" placeholder="Country ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" value="" name="city" placeholder="City ">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="">check in</label>
                                        <input type="text" class="form-control datepicker" value="" name="checkIn" placeholder="Check in">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">check out</label>
                                        <input type="text" class="form-control datepicker" value="" name="checkout" placeholder="check Out">
                                    </div>
                                </div>

                                <div class="controls">
                                    <button type="submit" class="btn_submit_inquiry">Submit Your Inquiry</button>
                                </div>

                            </form>

                            </div>




                            <div class="tab-pane container fade" id="vacations">...</div>
                            </div>

                        </div>
                        <div class="col-lg-6 right_col d-none d-lg-block">
                            <p class="title">Exclusive Phone Only</p>
                            <p class="subtitle">Flight Deals!</p>
                            <p class="phone_no"><i class="fas fa-phone"></i> (042) 3578 1551</p>
                            <span>Call our travel expert now</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Section Banner Ends Here -->

    <!-- Section Latest Offer Starts Here -->
    <section class="latest_offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="heading">Latest Offers</h3>
                        <div class="latest_offer_slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="offerHover">
                                <div class="offertop">4 nights</div>
                                <div class="offerBottom">
                                    <title>Kuala Lumpur</title>
                                    <price>From 72,161* PKR</price>
                                </div>
                            </div>
                            <img src="{{ asset('images/bankok.jpg') }}">

                        </div>

                            <div class="item">
                                <div class="offerHover">

                                    <div class="offertop">4 nights</div>
                                    <div class="offerBottom">
                                    <title>Kuala Lumpur</title>
                                    <price>From 72,161* PKR</price>
                                </div>
                                </div>
                                <img src="{{ asset('images/bankok.jpg') }}">
                            </div>
                            <div class="item">
                                <div class="offerHover">

                                    <div class="offertop">4 nights</div>
                                    <div class="offerBottom">
                                    <title>Kuala Lumpur</title>
                                    <price>From 72,161* PKR</price>
                                </div>
                                </div>
                                <img src="{{ asset('images/bankok.jpg') }}">
                            </div>

                        </div>

                </div>
                <div class="col-lg-4">
                    <div class="special_offer">
                        <div class="content_wrapper">
                            <title>Umra</title>
                            <span class="subtitle">Special Offer</span>
                            <a class="btn_link" href="umrah_listing">Book Now</a>
                        </div>
                        <img src="{{ asset('images/ummrah-offer.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
</section>

    <section class="flights_hotels">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="heading">Flights Highlights</h3>
                    <div class="flights_widget">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">International Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Domestic Flights</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                             <div class="flights-items-holder">

  @foreach($interFlights as $flight)


                                    <div class="flight-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="destination">{{ $flight->flying_from }} to {{ $flight->flying_to }}</span>
                                                <span class="class">Business</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="destination">From</span>
                                                <span class="fare">PKR 70,0000*</span>
                                            </div>

                                            <div class="col-sm-4">
                                                <a href="{{ route('flights.show', $flight->id) }}" class="btn btn-small">Book Now</a>
                                            </div>
                                        </div>

                                    </div>
 @endforeach

                                </div>



                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                 <div class="flights-items-holder">

                                 @foreach($domesticFlights as $flight)
                                    <div class="flight-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="destination">{{ $flight->flying_from }} to {{ $flight->flying_to }}</span>
                                                <span class="class">{{ $flight->class }}</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="destination">From</span>
                                                <span class="fare">PKR {{ $flight->price }}</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="{{ route('flights.show', $flight->id) }}" class="btn btn-small">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>

                        <a href="flihgtlisting" class="view_all_link">View All</a>

                    </div>

                </div>
                <div class="col-lg-6">
                    <h3 class="heading">Hotels Highlights</h3>
                    <div class="row">

                        @foreach ($hotels as $hotel)
                        <div class="col-sm-6">
                            <div class="item">
                                <div class="offerHover">
                                    <div class="offertop">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star active"></i>
                                    </div>
                                    <div class="offerBottom">
                                    <title>{{ $hotel->name }}</title>
                                    <span></span>
                                </div>
                                </div>
                                <img src="../hotels/{{ $hotel->image }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="Hotel_listing" class="view_all_link">View All</a>




                </div>
            </div>
        </div>
</section>

    <section class="featured_offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wrapper">
                    <img src="images/phuket.jpg" alt="" class="img-fluid">
                    <div class="content_wrap">
                        <a href="" class="btn btn_link">Book Now</a>
                        <div class="red_circle">
                            <span>Take off to</span>
                            <title>Istanbul</title>
                            <price>Start From  PKR 77,000</price>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wrapper">
                    <img src="images/phuket.jpg" alt="" class="img-fluid">
                    <div class="content_wrap">
                        <a href="" class="btn btn_link">Book Now</a>
                        <div class="red_circle">
                            <span>Take off to</span>
                            <title>Dubai</title>
                            <price>Start From  PKR 77,000</price>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="holidays">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h6 class="heading">Holidays</h6>
                    <p class="detail">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit </p>
                    <a href="/holiday" class="btn_link">View All</a>
                </div>
                <div class="col-lg-8">

                    <div class="holidays_offer_slider owl-carousel owl-theme">
                        @foreach ($holidays as $holiday)
                        <div class="item">
                            <div class="offerHover">
                                <div class="offertop">4 nights</div>
                                <div class="offerBottom">
                                    <title>{{ $holiday->name }}</title>
                                    <price>From {{ $holiday->price}} PKR</price>
                                    <span>Private Car, Full Breakfast, Ticket, Visa</span>
                                </div>
                            </div>
                            <img src="/hotels/{{ $holiday->image }}">
                        </div>

                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Section Travel Insurance -->
    <section class="travel_insurance">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src={{asset("images/insurance_banner.jpg")}} alt="" class="img-fluid" style="width:100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Section Travel Insurance -->

    <!-- Section Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_main_heading"> Testimonials </h2>
                    <div class="testimonial_slider owl-carousel owl-theme">
                        <div class="item">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit </p>
                            <span>Olivia Walker - Atlantica</span>
                        </div>
                        <div class="item">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit </p>
                            <span>Olivia Walker - Atlantica</span>
                        </div>
                        <div class="item">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit </p>
                            <span>Olivia Walker - Atlantica</span>
                        </div>
                        <div class="item">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit </p>
                            <span>Olivia Walker - Atlantica</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Testimonials -->

    <!-- Section Subscribe -->
    <div class="container">
        <section class="subscribe">
            <div class="row">
                <div class="col-lg-6">
                    <h6>Get your hands full with <br/> Exclusive offers & coupons.</h6>
                    <p>Just enter your email address & grab fabulous deals in your inbox!</p>
                </div>
                <div class="col-lg-6">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" class="form-control" name="" value="" placeholder="Your Email">
                                <button type="submit" class="btn btn_subscribe">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- Section Subscribe -->

    <!-- Section Partners Starts Here -->
    {{-- <section class="partners">
        <div class="container">

            <h2 class="section_main_heading"> Our Partners </h2>

            <ul class="partners_list row justify-content-center">
                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>
                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>

                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>
                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>
                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>
                <li class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <a href="#">
                        <img src={{asset("images/partners_placeholder.jpg")}} alt="img">
                    </a>
                </li>

            </ul>

        </div>
</section> --}}
<!-- Section Partners Starts Here -->
</main>
     @include('layouts.footer')
