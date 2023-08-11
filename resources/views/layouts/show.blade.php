@include('layouts.header')

<main class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-4">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <img src="/hotels/{{ $hotels->image }}" alt="Bangkok" style="height: 320px;" class="img-fluid">

            </div>
            <div class="col-md-5 mt-4">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <div class="card-body bg-gray">
                    <h6 class="card-title">{{$hotels->name}}</h6>
                    <div class="rating text-warning">
                        <!-- Rating stars -->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="review-count">1 Review</span>
                        <span class="separator">|</span>
                        <span class="write-review"><u>Write a Review</u></span>
                    </div>
        
                    <div class="rating text-warning mt-2">
                        <!-- Facilities -->
                        <div class="custom-card">
                            <i class="fas fa-car"></i>
                            <span>Car Park</span>
                        </div>
                        <div class="custom-card px-3">
                            <i class="fas fa-utensils"></i>
                            <span>Restaurant</span>
                        </div>
                        <div class="custom-card px-3">
                            <i class="fas fa-wifi"></i>
                            <span>Wi-Fi</span>
                        </div>
                        <div>
                            <p class="starting-form">
                                Rent Per Night <sup class="price-superscript">
                                    <span class="starting-price">{{$hotels->price}}</span>.<span class="decimal">83</span>
                                </sup>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Share icons -->
                    <p class="share-text">Share</p>
                    <div class="icon-container">
                        <a href="https://www.facebook.com/yourpage" class="icon-link facebook-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/yourhandle" class="icon-link twitter-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://plus.google.com/yourpage" class="icon-link google-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/yourprofile" class="icon-link linkedin-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    
                    <!-- SELECT button -->
                    <button type="button" class="custom-button">SELECT</button>
                </div>
            </div>
        </div>
        
           </div>
           <div class="container mt-5">
            <div class="row">
            <div class="col-12">
                <b> Hotal Details </b>
            </div>
           </div>
        </div>
          
        <div class="container bbbg-gray" >
            <div>
                {!! $hotels->description !!}
            </div>
            <p><b>Highlight:</b></p>
            <div>
                <button type="button" class="ccustom-button">
                    <i class="fas fa-check"></i> Car Park
                </button>
        
                <button type="button" class="ccustom-button" id="rr">
                    <i class="fas fa-check"></i> Restaurant
                </button>
        
                <button type="button" class="ccustom-button" id="ii">
                    <i class="fas fa-check"></i> Wifi
                </button>
            </div>
             
            <p class="mt-4">important Notes</p>  
            <div class="custom-list ">
              {!!  $hotels->notes  !!}
          </div>
        </div>
        
                          <div class="container">
                    <div class="ccontainer">
                        <form action="">
                            <h1><span class="h2">Hotel Inquiry!</span></h1>
                            <div class="input-group">
                                <input type="text" name="" id="" placeholder="Travelling From" class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="Travel Start Date*"
                                class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="Travel End Date*"
                                class="red-bottom-border">
                            </div>
                            <div class="input-group">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                            </div>
                            <div class="input-group">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                                <input type="text" name="" id="" placeholder="End text"
                                class="red-bottom-border">
                            </div>
                            <div >
                                <textarea  class="textarea1" name="" id="" cols="3" rows="7" placeholder="Share your requirment in details"></textarea>
                            </div>
                            <div class="button-group">
                                <button>SUBMIT APPLICATION</button>
                                
                            </div>
                            


                            
                        </form>
                        </div>
                        </div>


                
</main>
@include('layouts.footer')