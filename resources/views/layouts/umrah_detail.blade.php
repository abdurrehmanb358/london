@include("layouts.header")

<img src="{{ asset('images/holidayListing.jpg') }}" class="imgHoliday">



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
                    <i class="far fa-clock"></i> {{ $umra->days }} days - {{ $umra->nights }} night
                </span>
                <h3 class="umrah-h3">Economy Umrah Group</h3>
                <section class="banner" style="margin-bottom:30px">
                    <div class="banner_slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="bannerImage">
                                <img src="/hotels/{{ $slide[0] }}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="bannerImage">
                                
                                <img src="/hotels/{{ $slide[1] }}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="bannerImage">
                                <img src="/hotels/{{ $slide[2] }}" alt="image">
                            </div>
                        </div>
                    </div>
                </section>
                        <div class="custom-list ">
                            <p>{!! $umra->discription !!}</p>
                        </div>
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

                    <input type="hidden" value="{{ $umra->id }}" name="packageId">

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


