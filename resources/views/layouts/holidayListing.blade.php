@include('layouts.header')
<main>
    
    <div class="container-fluid" style="display: contents">
        <img src="{{ asset('images/holidayListing.jpg') }}" class="imgHoliday">
        <div class="col-6 h1-holiday">
            <h1>Holidays</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus explicabo a quidem distinctio possimus minima delectus blanditiis beatae corrupti fuga.</p>
        </div>
    </div>
    <div class="main">
        <div class="container">
            @if ($holidays->where('type', 'special')->count() > 0)
                <div class="row">
                    <div class="col-10">
                        <h1 class="holidayHeader">Special Vacation Pakage</h1> <hr class="hrHoliday">
                    </div>
                    <div class="col-2">
                        <a href="/holiday/all" class="linkholiday">VIEW ALL</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @php $count = 0 @endphp
                        @foreach ($holidays as $item)
                            @if($item->type == 'special' && $count < 4)
                                 @include('partials.holidayCard',['item'=>$item])
                            @php $count++ @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    
        <div class="container">
        @if ($holidays->where('type', 'Romantic')->count() > 0)
            <div class="row">
                <div class="col-10">
                    <h1 class="holidayHeader">Romantic Vacations</h1> <hr class="hrHoliday">
                </div>
                <div class="col-2">
                    <a href="/holiday/all" class="linkholiday">VIEW ALL</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @php $count = 0 @endphp
                    @foreach ($holidays as $item)
                        @if($item->type == 'Romantic' && $count < 4)
                             @include('partials.holidayCard',['item'=>$item])
                            @php $count++ @endphp
                        @endif
                    @endforeach
                    
                </div>
            </div>
        @endif
        </div>


        <div class="container">
            @if ($holidays->where('type', 'weekendGetaways')->count() > 0)
                <div class="row">
                    <div class="col-10">
                        <h1 class="holidayHeader">Weekend Gatways</h1> <hr class="hrHoliday">
                    </div>
                    <div class="col-2">
                        <a href="/holiday/all" class="linkholiday">VIEW ALL</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @php $count = 0 @endphp
                        @foreach ($holidays as $item)
                            @if($item->type == 'weekendGetaways' && $count < 4)
                                 @include('partials.holidayCard',['item'=>$item])
                            @php $count++ @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>



        <div class="container">
            @if ($holidays->where('type', 'cultural')->count() > 0)
                <div class="row">
                    <div class="col-10">
                        <h1 class="holidayHeader">Cultutal And Heritage</h1> <hr class="hrHoliday">
                    </div>
                    <div class="col-2">
                        <a href="/holiday/all" class="linkholiday">VIEW ALL</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @php $count = 0 @endphp
                        @foreach ($holidays as $item)
                            @if($item->type == 'cultural' && $count < 4)
                                 @include('partials.holidayCard',['item'=>$item])
                            @php $count++ @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div class="container">
            @if ($holidays->where('type', 'adventure')->count() > 0)
                <div class="row">
                    <div class="col-10">
                        <h1 class="holidayHeader">Adventure Pakages</h1> <hr class="hrHoliday">
                    </div>
                    <div class="col-2">
                        <a href="/holiday/all" class="linkholiday">VIEW ALL</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @php $count = 0 @endphp
                        @foreach ($holidays as $item)
                            @if($item->type == 'adventure' && $count < 4)
                                 @include('partials.holidayCard',['item'=>$item])
                            @php $count++ @endphp
                            @endif
                        @endforeach
                    </div>
                </div>

            @endif
        </div>
    </div>

</main>


@include("layouts.footer")