<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.png" type="image">
        <link rel="stylesheet" href="{{asset('css/vendors/bootstrap.min.css')}}" integrity="" crossorigin="">
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <link href="{{ asset('css/vendors/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset( "css/vendors/owl.theme.default.min.css") }}" rel="stylesheet">
       
        <link href="{{ asset("css/vendors/slick.css") }}"  rel="stylesheet">
       
       
        <link href="{{ asset( "css/vendors/slick-theme.css") }}" rel="stylesheet">
       
        <link href="{{ asset("css/vendors/animate.css") }}" rel="stylesheet">
      
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("css/vendors/fancybox.min.css") }}" />
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
        <script src="{{ asset('js/stickey/ResizeSensor.js') }}"></script>
        <script src="{{ asset('js/stickey/theia-sticky-sidebar.js') }}"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        
        
        
        <script src="js/custom.js"></script>

        <title>LondonTravels</title>
    </head>
    <body>       

     <?php //include("loader.php"); ?> 

     <div class="topbar">
        <p><a href="tel:021738929383"><i class="fas fa-phone"></i> 021738929383</a></p>
        <span>|</span>
        <p><a href="mailto:info@londontravel.com"><i class="fas fa-envelope"></i> Info@londontravel.com</a></p> 
        
    </div>

    <div class="hamburgerIcon" id="hamburgerSideNav">
        <span> </span>
        <span> </span>
        <span> </span>
        <span> </span>
        <span> </span>
        <span> </span>
        <strong> Menu </strong>
    </div>

    <div class="sideBar" id="navSidebar">
        <nav class="sideNav"> 
             <ul>
                <li> <a href="login.php">LOG IN </a> </li>
                <li> <a class="scrollNav" href="#howItsWorkSec">HOW IT WORKS  </a></li>
                <li> <a href="designers.php">DESIGNERS</a></li>
                <li> <a href="projects.php">PROJECTS</a></li>
                <li> <a class="scrollNav" href="#pricingSec">PRICING </a></li>
            </ul>
            <a class="siteBtn fill" href="step-1a.php"> START YOUR PROJECT </a>
        </nav>
    </div>

    <!-- <?php //$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    //if (strpos($url,'index') !== false) { ?>
           <main class="home">  
     <?php //} else if (strpos($url,'404') !== false) { ?>        
             <main class="page-404">  
    <?php //} else { ?>
           <main>
    <?php //} ?>  -->
        
    <header class="siteHeader">
    
        <div class="headerContainer clearfix">
            <div class="siteLogo"> 
                <a href="index.php"> <img src="{{ asset('images/logo.png') }}" alt="London Travel"> </a>
            </div>

            @include('layouts.mainbar')            
        </div>
       
    </header>


</html>