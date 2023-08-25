@include("layouts.header")

<img src="{{ asset('images/Hotel2.png') }}" class="img-set">



<section style="padding-top: 100px">
    @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-xs-12">
                <span class="umrah-date">
                    <i class="far fa-clock"></i> 21 days - 20 night
                </span>
                <h3 class="umrah-h3">Economy Umrah Group</h3>
                <section class="banner">
                    <div class="banner_slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="bannerImage">
                                <img src="{{asset('images/umrah-mg2.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="bannerImage">
                                <img src= "{{asset('images/umrah-mg3.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="bannerImage">
                                <img src= "{{asset('images/umrah-mg.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </section>
                <span>
                    Al-Fatah Travel & Tours, with the Grace of Allah Almighty will be taking economy UMRAH groups in the month of december.
                    This package includes Ziyarats as well in Makkah Pak and Madinah Pak
                    20 Nights / 21 Days Package and price starting from just 214,000/-pkr <br>
                    Inclusions: <br>
                    > Umrah Visa<br>
                    > Airline Tickets (Saudi Airlines)<br>
                    > Ground Transport<br>
                    > Hotel Accommodation<br>
                    > Ziarats<br>
                    Traveling date: Dec 30, 2022<br>
                </span>
            </div>
            <div class="col-lg-4 col-md-5 col-xs-12">
                <form action="{{ route('umrah.inquiries') }}" method="POST" class="umrah-bg" enctype="multipart/form-data">
                    @csrf
                    <h4>Submit Inquiry</h4>
                    <div>
                        <input class="set-input11" type="text"  placeholder="Name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div>
                        <input class="set-input11" type="text"  placeholder="Email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div>
                        <input class="set-input11" type="tel"  placeholder="Phone" name="phone" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div>
                        <input class="set-input11 datepicker" placeholder="Date" name="date" type="text" value="{{ old('date') }}" autocomplete="off">
                        @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                    </div>
                    <input type="hidden" value="{{ $hotel->id }}" name="packageId">
                    {{-- <input type="hidden" value="umra" name="type"> --}}
                    <div>
                        <input class="set-input11" type="text"  placeholder="Number of Person" name="nop" value="{{ old('nop') }}">
                        @if ($errors->has('nop'))
                                <span class="text-danger">{{ $errors->first('nop') }}</span>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-lg umrah-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>




@include("layouts.footer")


