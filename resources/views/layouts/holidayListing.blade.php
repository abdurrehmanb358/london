@include('layouts.header')
<main>
    
    <div class="container-fluid" style="display: contents">
        <img src="{{ asset('images/holidayListing.jpg') }}" class="imgHoliday">
    </div>
    <div class="main">
        <div class="container">
            @if ($holidays->where('type', 'special')->count() > 0)
            <div class="row">
                <div class="col-10">
                    <h1 class="holidayHeader">Special Vacation Pakage</h1> <hr class="hrHoliday">
                </div>
                <div class="col-2">
                    <a href="" class="linkholiday">VIEW ALL</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @php $count = 0 @endphp
                    @foreach ($holidays as $item)
                    @if($item->type == 'special' && $count < 4)
                    <div class="col-lg-3 col-md-6">
                      
                        <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                            <div class="image-con">
                                <img src="../hotels/{{ $item->image }}" class="holidayImage">
                                <div class="image-text1">
                                    <h4>{{ $item->name }}</h4>
                                </div>
                                <div class="image-text2">
                                    <p>PKR {{ $item->price }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-9">
                                       <p class="limited-lines">4 Nights Stay,Private car <br> Full Breakfast,TicketVisa</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn-star">
                                <div>
                                    <button class="btn btn-danger">BOOK NOW</button>
                                 </div>
                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                        </div>
                       
                        
                    </div>
                    @php
                        $count++
                    @endphp
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
                <a href="" class="linkholiday">VIEW ALL</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @php $count = 0 @endphp
                @foreach ($holidays as $item)
                @if($item->type == 'Romantic'  && $count < 4)
                <div class="col-lg-3 col-md-6">
                  
                    <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                        <div class="image-con">
                            <img src="../hotels/{{ $item->image }}" class="holidayImage">
                            <div class="image-text1">
                                <h4>{{ $item->name }}</h4>
                            </div>
                            <div class="image-text2">
                                <p>PKR {{ $item->price }}</p>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-9">
                                   <p class="limited-lines">4 Nights Stay,Private car <br> Full Breakfast,TicketVisa</p>  
                                </div>
                            </div>
                        </div>
                        <div class="card-btn-star">
                            <div>
                                <button class="btn btn-danger">BOOK NOW</button>
                             </div>
                            <div class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>

                    </div>
                   
                    
                </div>
                @php $count++ @endphp
                @endif
                 @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<div class="container">
    @if ($holidays->where('type', 'weekendGetaways')->count() > 0)
    <div class="row">
        <div class="col-10">
            <h1 class="holidayHeader">Weekend Gatways</h1> <hr class="hrHoliday">
        </div>
        <div class="col-2">
            <a href="" class="linkholiday">VIEW ALL</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @php $count = 0 @endphp
            
            @foreach ($holidays as $item)
            @if($item->type == 'weekendGetaways' && $count < 4)
           
            <div class="col-lg-3 col-md-6">
              
                <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                    <div class="image-con">
                        <img src="../hotels/{{ $item->image }}" class="holidayImage">
                        <div class="image-text1">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="image-text2">
                            <p>PKR {{ $item->price }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-9">
                               <p class="limited-lines">4 Nights Stay,Private car <br> Full Breakfast,TicketVisa</p>  
                            </div>
                        </div>
                    </div>
                    <div class="card-btn-star">
                        <div>
                            <button class="btn btn-danger">BOOK NOW</button>
                         </div>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                </div>
               
                
            </div>
              @php $count++ @endphp  
            @endif
             @endforeach
        </div>
    </div>
    @endif
</div>
</div>


<div class="container">
    @if ($holidays->where('type', 'cultural')->count() > 0)
    <div class="row">
        <div class="col-10">
            <h1 class="holidayHeader">Cultutal And Heritage</h1> <hr class="hrHoliday">
        </div>
        <div class="col-2">
            <a href="" class="linkholiday">VIEW ALL</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @php $count = 0 @endphp
            @foreach ($holidays as $item)
            @if($item->type == 'cultural' && $count < 4)
            <div class="col-lg-3 col-md-6">
              
                <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                    <div class="image-con">
                        <img src="../hotels/{{ $item->image }}" class="holidayImage">
                        <div class="image-text1">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="image-text2">
                            <p>PKR {{ $item->price }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-9">
                               <p class="limited-lines">4 Nights Stay,Private car <br> Full Breakfast,TicketVisa</p>  
                            </div>
                        </div>
                    </div>
                    <div class="card-btn-star">
                        <div>
                            <button class="btn btn-danger">BOOK NOW</button>
                         </div>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                </div>
               
                @php
                    $count++
                @endphp
            </div>
           
            @endif
             @endforeach
        </div>
    </div>
    @endif
</div>
</div>


<div class="container">
    @if ($holidays->where('type', 'adventure')->count() > 0)
    <div class="row">
        <div class="col-10">
            <h1 class="holidayHeader">Adventure Pakages</h1> <hr class="hrHoliday">
        </div>
        <div class="col-2">
            <a href="" class="linkholiday">VIEW ALL</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($holidays as $item)
            @if($item->type == 'adventure' && $count < 4)
            <div class="col-lg-3 col-md-6">
              
                <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                    <div class="image-con">
                        <img src="../hotels/{{ $item->image }}" class="holidayImage">
                        <div class="image-text1">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="image-text2">
                            <p>PKR {{ $item->price }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-9">
                               <p class="limited-lines">4 Nights Stay,Private car <br> Full Breakfast,TicketVisa</p>  
                            </div>
                        </div>
                    </div>
                    <div class="card-btn-star">
                        <div>
                            <button class="btn btn-danger">BOOK NOW</button>
                         </div>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                </div>
               
                
            </div>
            @php
                $count++
            @endphp
            @endif
             @endforeach
        </div>
    </div>

    @endif
</div>
</div>
</div>
</main>


@include("layouts.footer")