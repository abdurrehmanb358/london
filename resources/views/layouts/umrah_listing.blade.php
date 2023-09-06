@include("layouts.header")

<section class="banner">
    <div class="banner_slider owl-carousel owl-theme owl-loaded owl-drag">
        <div class="item">
            <div class="bannerImage">
                <img src="{{asset('images/madinah.jpg')}}" alt="image" class="img1122">                
                <div class="content_wrapper1122">
                    <div class="container">
                        <div class="row">
                            <div class="col align-center11">
                                <h1 id="h1hh">Offering Best Umrah Services</h1>
                                <p class="c-white">Just one step away</p>
                                <a href="#book" class="btn btn-primary btn-lg dec1">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="item">
            <div class="bannerImage">
                <img src= "{{asset('images/Makkah.jpg')}}" alt="image" class="img1122">
                <div class="content_wrapper1122">
                    <div class="container">
                        <div class="row">
                            <div class="col align-center11">
                                <h1 id="h1hh">Offering Best Umrah Services</h1>
                                <p class="c-white">Just one step away</p>
                                <a href="#book" class="btn btn-primary btn-lg dec1">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Only for Mobile and tab -->
    {{-- <div class="mobile_caption d-block d-lg-none">
        <h1>Offering Best Umrah Services</h1>
        <p class="c-white">Just one step away</p>
        <a href="#book" class="btn btn-primary btn-lg dec1">Booking Now</a>
    </div> --}}
    <!-- Only for Mobile and tab -->

    {{-- <div class="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Best Umrah Pakage</h1>
                </div>
            </div>
        </div>
    </div> --}}
</section>

    <div class="container con-dis1" id="book" >
        <div class="row">
            <div class="col-12">
                <h3  style="color: #D42729;margin-top:25px">Populer Tour Pakage</h3>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h1 style="margin-top: 25px">The best of aur all Umrah Pakages</h1>
            </div>
        </div>
    </div>

    <div class="container con-dis1" >
        <div class="row">
            @foreach ($pakages as $pakage)
           <div class="col-lg-4 col-md-6 col-sm-12  ">
            <a href="/layouts/{{ $pakage->id}}/umrah_detail"><img class="img-set" src="../hotels/{{ $pakage->image }}" alt="image"></a>
                <div class="setting13">
                    <div class="rating text-warning">
                        <li class="fa fa-star yellow-star"></li>
                        <li class="fa fa-star yellow-star"></li>
                        <li class="fa fa-star yellow-star"></li>
                        <li class="fa fa-star yellow-star"></li>
                    </div>
                    <div>
                        <h5 id="set112">Umrah <br> Economy Group</h5>
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt"></i>  Mather Al Jewar/ Karam Silver
                    </div>
                    <span class="time_zone">{{ $pakage->days }} days - {{ $pakage->nights }} night</span>
                </div>
           </div>
           @endforeach
        </div>
    </div>


    

@include("layouts.footer")i
