@include('layouts.header')

<main class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-4">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <img src="/hotels/{{ $holidays->image }}"  style="height:320px;width:100%" class="img-fluid">

            </div>
            <div class="col-md-5 mt-4">
                <!-- Column that occupies 6 grid columns with an offset of 3 columns -->
                <div class="card-body bg-gray">
                    <h6 class="card-title">{{$holidays->name}}</h6>
                    <div class="rating text-warning">
                        <!-- Rating stars -->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="review-count">1 Reviews</span>
                        <span class="separator">|</span>
                        <span class="write-review"><u>Write a Review</u></span>
                    </div>

                    <div class="rating text-warning mt-2">
                        <!-- Facilities -->
                        <div class="custom-card">
                            <p class="style" style="font-size: 12px;">Duration</p>
                        </div>
                        <div class="custom-card px-3" style="color: black;">
                            5Night/ 6Days
                        </div>

                        <div>
                            <p class="starting-form">
                                Starting From <sup class="price-superscript">
                                    <span class="starting-price">{{ $holidays->price }}</span>
                                </sup>
                            </p>
                        </div>
                    </div>

                    <div>
                        <p class="style" style="font-size: 12px; margin-top: -30px;">price per adult on double / twins
                            sharing basis</p>
                    </div>

                    <!-- Share icons -->
                    <p class="share-text" style=" margin-top: -px;">Share</p>
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
                    <button type="button" class="custom-button"><a href="#book" style="color: white">Book Now</a></button>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <b>
                    <h5>Package Overview</h5>
                </b>
            </div>
        </div>
    </div>

    <div class="container bbbg-gray">
        <div>

            <p>{!!$holidays->description !!}</p>
        </div>
        
        <p><b>Highlight:</b></p>
        <div>
            <a href="#" class="ccustom-button " >
                <i class="fas fa-check"></i> Accommodation
            </a>

            <a href="#" class="ccustom-button" id="rr">
                <i class="fas fa-check"></i> Return Airport transfer
            </a>

            <a href="#" class="ccustom-button " id="ii">
                <i class="fas fa-check"></i> All return taxes
            </a>
        </div>
        <div>
            <div style="margin-top:20px;">
                <span><b>Acommadation</b></span>
            </div>
            <table class="custom-table">
                <tr>
                    <th class="custom-city">City</th>
                    <th class="custom-hotel">Hotel</th>
                </tr>
                <tr>
                    <td class="custom-description">{{$holidays->category}}</td>
                    <td class="custom-description-gray">{{ $holidays->name }} - Double Room Or Similar</td>
                </tr>
            </table>

        </div>

        <pre><strong>  <span>Call@(042)3578 1551 to book Grand Cayman vacation (5 Night /6 Days) Package.</span></strong></pre>

        <table style="margin-top: 35px;">
            <tr>
                <th width="23%" style="color: red;">Inclusion</th>
                <th width="50%" style="color: red;">Exclusion</th>
            </tr>
            <tr>
                <td>
                    Hotal Acommodtaion for 05 Nights
                </td>
                <td>Any Airfare</td>
            </tr>
            <tr>
                <td>
                    Return Airpost Transfer by a coach
                </td>
                <td>Tips</td>
            </tr>
            <tr>
                <td>
                    All local taxes
                </td>
                <td>Gratuity</td>
            </tr>
            <tr>
                <td>

                </td>
                <td>Repot fee/Seasonal Surcharges</td>
            </tr>
        </table>


    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <b>
                    <h5>Package litinerary</h5>
                </b>
            </div>
        </div>
    </div>

    <div class="container mt-3 " style="background-color:#fcfcfc; padding:30px;">
        <table style="width: 100%;">
            <tr>
                <th
                    style="width: 5%; background-color: #CF2828; text-align: center; color: white; padding:10px; font-size:15px;">
                    Day1:
                </th>
                <th style="width: 50%; background-color: #000559; padding-left: 35px; color: white;font-size:15px;">
                    Arrive Grand Cayman
                </th>

            </tr>

        </table>
        <p style="background-color: #ededed; padding:10px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Sequi vero aperiam maiores ipsam obcaecati illum?</p>
        <div>
            <table style="width: 100%; mt-2 ">
                <tr>
                    <th
                        style="width: 5%; background-color: #CF2828; text-align: center; color: white; padding:10px; font-size:15px;">
                        Day2:</th>
                    <th
                        style="width: 50%; background-color: #000559; padding-left: 35px; color: white; font-size:15px;">
                        Arrive Grand
                        Cayman</th>

                </tr>

            </table>
            <p style="background-color: rgb(240, 240, 240); padding:10px;">Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Sequi vero aperiam maiores ipsam obcaecati illum?</p>


        </div>


    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <b>
                    <h5>Rates & Dates</h5>
                </b>
            </div>
        </div>
    </div>


    </div>
    <div class="container " style="background-color:#fcfcfc; padding:24px">
        <table>
            <tr>
                <th class="width">Rates</th>
                <th class="external-css">Category</th>
                <th class="add">Occupancy</th>
                <th class="add">inquire</th>
            </tr>
            <tr>
                <td class="ee">{{ $holidays->price }}</td>
                <td class="ee">Delux</td>
                <td class="ee">per person on twin sharing</td>
                <td class="ee">
                    <button>inquire</button>

                </td>
            </tr>


        </table>
        <div>
            <p class="mt-4" id="book">important Notes</p>
            <div class="custom-list ">
                {!! $holidays->notes !!}
            </div>

        </div>

    </div>

        <div class="container ">
            <form action="">
                <h1 ><span class="h2">Holiday Inquiry!</span></h1>
                <div class="input-group">



                    <input type="text" name="" id="" placeholder="Travelling From"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="Travel Start Date*"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="Travel End Date*"
                        class="red-bottom-border">


                </div>
                <div class="input-group">
                    <input type="text" name="" id="" placeholder="Adults"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="Childern"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="infacts"
                        class="red-bottom-border">
                </div>
                <div class="input-group">
                    <input type="text" name="" id="" placeholder="Lead passenger Name*"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="Lead passenger Email Id*"
                        class="red-bottom-border">
                    <input type="text" name="" id="" placeholder="Lead passenger Contant Number*"
                        class="red-bottom-border">
                </div>
                <div>
                    <textarea class="textarea" name="" id="" cols="3" rows="7"
                        placeholder="Share your requirment in details"></textarea>
                </div>
                <div class="button-group">
                    <button class="btn btn-danger">SUBMIT APPLICATION</button>


                </div>




            </form>
        </div>
    

        @include("layouts.footer")