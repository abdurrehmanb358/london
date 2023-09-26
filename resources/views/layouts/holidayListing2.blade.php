@include('layouts.header')

<main>
    <div class="container-fluid" style="display: contents">
        <img src="{{ asset('images/holidayListing.jpg') }}" class="imgHoliday">
        <div class="col-6 h1-holiday">
            <h1>Holidays</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus explicabo a quidem distinctio possimus minima delectus blanditiis beatae corrupti fuga.</p>
        </div>
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