@include('layouts.header')

<main>
    <div class="container-fluid" style="display: contents">
        <img src="{{ asset('images/holidayListing.jpg') }}" class="imgHoliday">
    </div>
</main>
<div class="main">
    <div class="container">

        <h1 style="margin: 30px 15px">All Holiday Pakages </h1>
        
        <div class="container">
            <div class="row">
                @foreach ($holidays as $item)
                    @include('partials.holidayCard',['item'=>$item])
                @endforeach
            </div>
        </div>
    </div>
</div>
        
    @include('layouts.footer')