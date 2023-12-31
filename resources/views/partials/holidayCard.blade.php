
            <div class="col-lg-3 col-md-6">              
                <div class="card" id="cardHoliday" style="display: flex; justify-content: space-between;">
                    <div class="image-con">
                        <a href="/holiday/detail/{{ $item->id}}"><img src="../hotels/{{ $item->image }}" class="holidayImage"></a>
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
                            <button class="btn btn-danger" ><a href="/holiday/detail/{{ $item->id}}" style="color: white">BOOK NOW</a></button>
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
            
         