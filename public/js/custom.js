function scrollToBottom() {
    jQuery('html, body').animate({scrollTop: jQuery(document).height()}, 'slow');
}
function scrollToTop() {
    jQuery('html, body').animate({scrollTop: 0}, 'slow');
}



function goBack() {
  window.history.back();
}


  

jQuery(document).ready(function () {
    

    // header on scroll
    
    jQuery(window).scroll(function () {
        if (jQuery(document).scrollTop() > 10) {
            jQuery('.siteHeader').addClass('headerSchroll');
            jQuery('body').addClass('scroll-on');
        }
        else {
            jQuery('.siteHeader').removeClass('headerSchroll');
            jQuery('body').removeClass('scroll-on');
        }
    });


    jQuery(window).scroll(function () {
        if (jQuery(document).scrollTop() > 50) {
            jQuery('.stickeyWrap').addClass('sticky');
        }
        else {
            jQuery('.stickeyWrap').removeClass('sticky');
        }
    });



        // var winheight = jQuery(window).height();
        // var winh = winheight + "px";
        // jQuery(".loginWrapper").height(winh);
        // jQuery(window).resize(function () {
        //     var winheight = jQuery(window).height();
        //     var winh = winheight + "px";
        //     jQuery(".loginWrapper").height(winh);
        // });


 

    // Resposive menu for website 


    jQuery("#hamburgerSideNav").click(function () {
        jQuery(this).toggleClass('open');
        jQuery('#navSidebar, .mainWrapper').toggleClass('open');
        jQuery('body').toggleClass('overflohidden');
    });

    jQuery(".mainWrapper").click(function () {
        jQuery('#navSidebar, #hamburgerSideNav').removeClass('open');
        jQuery('body').removeClass('overflohidden');
        jQuery(this).removeClass('open');
    });
    
    jQuery(window).resize(function(){    
           jQuery('#navSidebar, #hamburgerSideNav').removeClass('open');
           jQuery('body').removeClass('overflohidden');
           jQuery('.mainWrapper').removeClass('open');
    });
    
    jQuery(".sideBar a").click(function() {
        jQuery('#navSidebar, #hamburgerSideNav, .mainWrapper').removeClass('open');
        jQuery('body').removeClass('overflohidden');
    });

    jQuery(".addPromo span a").click(function() {
        jQuery(this).parents('.addPromo span').addClass('active');
        jQuery('.promocodeBar').addClass('open');
    });

    jQuery(".promoCancelBtn").click(function() {
        jQuery('.promocodeBar').removeClass('open');
          jQuery('.addPromo span').removeClass('active');
    });

    jQuery(".addAnotherRoomBtn").click(function() {
        jQuery('.addAnotherRoomBox').addClass('active');
        jQuery('body').addClass('overflohidden-md');
    });

    jQuery(".aarBoxClose").click(function() {
        jQuery('.addAnotherRoomBox').removeClass('active');
         jQuery('body').removeClass('overflohidden-md');
    });


     


      jQuery(".summaryTitleMobile").click(function () {
        jQuery(this).toggleClass('active');
        jQuery('.packageSummaryWrap').toggleClass('active');
        jQuery('.packageSummaryContentwrap').slideToggle();
      });


      var winwidth = jQuery(window).width();
      if (winwidth > 767) {
           jQuery('.packageSummaryContentwrap').show();
      } else {
           jQuery('.packageSummaryContentwrap').show();
      }

    jQuery(window).resize(function () {
        var winwidth = jQuery(window).width();
        if (winwidth > 767) {
            jQuery('.packageSummaryContentwrap').show();
        } else {
            jQuery('.packageSummaryContentwrap').show();
        }
    });



    // packages section


    jQuery(".packageToggleBtn").click(function () {
        jQuery(this).toggleClass('open');
        jQuery(this).parents(".packageBox.sidePkge").children('.selectPackageBtn').slideToggle();
        jQuery(this).parents(".packageBox.sidePkge").children('.packageSecBottom').slideToggle();
    });


    var winwidth = jQuery(window).width();
    if (winwidth > 991) {
        jQuery('.sidePkge .selectPackageBtn, .sidePkge .packageSecBottom').show();
    } else {
        jQuery('.sidePkge .selectPackageBtn, .sidePkge .packageSecBottom').hide();
    }

    jQuery(window).resize(function () {
        var winwidth = jQuery(window).width();
        if (winwidth > 991) {
            jQuery('.sidePkge .selectPackageBtn, .sidePkge .packageSecBottom').show();
        } else {
            jQuery('.sidePkge .selectPackageBtn, .sidePkge .packageSecBottom').hide();
        }
    });

    // Filter section

    jQuery(".sideFilterBtn").click(function () {
        jQuery('.sideFilterContent').addClass('open');
    });
    jQuery(".filterCloseBtn, .filterActionBtns a").click(function () {
        jQuery('.sideFilterContent').removeClass('open');
    });
    jQuery(window).resize(function(){   
         jQuery('.sideFilterContent').removeClass('open');
    });


    // Designer Popup


    jQuery(".designerPopupBtn").click(function () {
        jQuery(this).toggleClass('open');
        jQuery('.designerDetailWrap').toggleClass('open');
        jQuery('.mainWrapper').addClass('overflohidden');
    });


    // banner arrow scroll
 
    
    jQuery(".scrollNav").click(function () {
        jQuery('.scrollNav').removeClass('active');
        jQuery(this).addClass('active');
    });
 
 
    jQuery(".scrollNav").click(function (e) {
        e.preventDefault();
        var section = jQuery(this).attr("href");
        jQuery("html, body").animate({
            scrollTop: jQuery(section).offset().top - 77
        });
        
        if ($(window).width() < 768) {
            jQuery("html, body").animate({
                scrollTop: jQuery(section).offset().top - 60
            });
        }

    });

 
    // owl slider


    var owl = jQuery('.banner_slider');
    owl.owlCarousel({
        items:1,
        singleItem: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        dots: true,
        nav: false,
        center: true,
        animateOut: 'fadeOut'

    });



      jQuery('.hiw-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: false,
        adaptiveHeight: true,
        asNavFor: '.hiw-slider-nav',
        infinite: false
      });
      
      jQuery('.hiw-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.hiw-slider-for',
        dots: false,
        centerMode: true,
        variableWidth: true,
        focusOnSelect: true,
        arrows:false,
        infinite: false
         
        // responsive: [
        //     {
        //       breakpoint: 768,
        //       settings: {
        //          slidesToShow: 2
        //       }
        //     },
        //     {
        //       breakpoint: 480,
        //       settings: {
        //          slidesToShow: 2
        //       }
        //     }
        // ]
      });


      

      var latest_offer_slider = jQuery('.latest_offer_slider');
      latest_offer_slider.owlCarousel({
          items:2,
          loop: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          dots: false,
          nav: true,
          center: false,
          smartSpeed:3000,
          autoHeight:true,
          margin:30,
          responsive:{
              0:{
                   nav: false,
                   smartSpeed:1000,
                   dots: true
              },
              1025:{
                   
              }
          }
      });

      var testimonial_slider = jQuery('.testimonial_slider');
      testimonial_slider.owlCarousel({
          items:2,
          loop: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          dots: true,
          nav: false,
          center: false,
          smartSpeed:3000,
          autoHeight:true,
          margin:30,
          responsive:{
              0:{
                   nav: false,
                   smartSpeed:1000,
                   dots: true
              },
              1025:{
                   
              }
          }
      });


      



      var holidays_offer_slider = jQuery('.holidays_offer_slider');
      holidays_offer_slider.owlCarousel({
          items:2,
          loop: false,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplayHoverPause: false,
          dots: false,
          nav: true,
          center: false,
          smartSpeed:3000,
          autoHeight:true,
          margin:30,
          responsive:{
              0:{
                   nav: false,
                   smartSpeed:1000,
                   dots: true
              },
              1025:{
                   
              }
          }
      });



  var owl = jQuery('.testimonial-slider');
    owl.owlCarousel({
        items:2,
        loop: false,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        dots: false,
        nav: true,
        center: false,
        smartSpeed:3000,
        autoHeight:true,
        margin:30,
        responsive:{
            0:{
                 nav: false,
                 smartSpeed:1000,
                 dots: true
            },
            1025:{
                 
            }
        }
    });
  

    var owl = jQuery('.designer-slider');
    owl.owlCarousel({
        items:1,
        singleItem: true,
        loop: true,
        autoHeight:false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        dots: true,
        nav: true,
        center: true,
        animateOut: 'fadeOut',
          responsive:{
              0 : {
                  // dots: false
              },

              480 : {
                  // dots: false
              },
              // breakpoint from 768 up
              768 : {
                  
              }
          }

    });

    var owl = jQuery('.project-slider');
    owl.owlCarousel({
        items:1,
        singleItem: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        dots: true,
        nav: true,
        center: true,
        animateOut: 'fadeOut'

    });

  

    


    // Video Modal


    // jQuery("#videoModal").on('show.bs.modal', function () { 
    //     jQuery('#videoModal iframe').attr('src', 'https://www.youtube.com/embed/Rex2cxvf6GE?autoplay=1');
    //     owl.trigger('stop.owl.autoplay');
    // });

    // jQuery("#videoModal").on('hidden.bs.modal', function () {
    //    jQuery('#videoModal iframe').attr('src', 'https://www.youtube.com/embed/Rex2cxvf6GE')
    //    owl.trigger('play.owl.autoplay');
    // });



    var videoSrc = jQuery("#videoModal iframe").attr("src");

    jQuery('#videoModal').on('show.bs.modal', function () { // on opening the modal
      // set the video to autostart
      jQuery("#videoModal iframe").attr("src", videoSrc+"&amp;autoplay=1");
    });

    jQuery("#videoModal").on('hidden.bs.modal', function (e) { // on closing the modal
      // stop the video
      jQuery("#videoModal iframe").attr("src", null);
    });



    // jQuery(".otherCountryBtn").change(function() {
    //     jQuery(".otherCountries").toggleClass('active');
    //     jQuery(this).toggleClass('open');
    // });

    jQuery(".otherCountryBtn").change(function() {
        if (jQuery(this).is(':checked')){
             jQuery(".otherCountries").addClass("active");
        }
    });

    jQuery(".someCountry").change(function() {
         if (jQuery(this).is(':checked')){
            jQuery(".otherCountries").removeClass("active");
        }
    });
    

    jQuery(".selectBudget").click(function () {
        jQuery(".selectBudget").removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery(".selectDesignerbox").click(function () {
        jQuery(".selectDesignerbox").removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery(".selectedRoomType ul li").click(function () {
        jQuery(".selectedRoomType ul li").removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery(".roomBox").click(function () {
        jQuery(".roomBox").removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery(".cardsList li").click(function () {
        jQuery(".cardsList li").removeClass('active');
        jQuery(this).addClass('active');
    });


    // jQuery(window).scroll(function () {
    //    jQuery('.selectDesignerbox').each(function () {
    //       if (isScrolledIntoView(this) === true) {
    //           jQuery(this).addClass('active')
    //       }
    //    });
    // });


    // Loader
/* 
    document.onreadystatechange = function () {
        var state = document.readyState
        if (state === "complete") {
            setTimeout(function(){
                document.getElementById('interactive');
                document.getElementById('load').style.visibility="hidden";
                jQuery(load).addClass('loaded');
           },400);
        }
    } */

    // Sticky Sidebar
    
    jQuery('.checkout-stickey').theiaStickySidebar({
          'containerSelector': '',
          'additionalMarginTop': 20,
          'additionalMarginBottom': 0,
          'updateSidebarHeight': true,
          'minWidth': 0,
          'disableOnResponsiveLayouts': true,
          'sidebarBehavior': 'modern',
          'defaultPosition': 'relative',
          'namespace': 'TSS'
    });


    // filter Sidebar

    jQuery('.sideFilter-stickey').theiaStickySidebar({
        'containerSelector': '',
        'additionalMarginTop': 105,
        'additionalMarginBottom': 0,
        'updateSidebarHeight': true,
        'minWidth': 0,
        'disableOnResponsiveLayouts': true,
        'sidebarBehavior': 'modern',
        'defaultPosition': 'relative',
        'namespace': 'TSS'
    });

    // if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
    //     jQuery('.modal').on('shown.bs.modal', function (e) {
    //       jQuery('html').addClass('freezePage'); 
    //       jQuery('body').addClass('freezePage');
    //     });
    //     jQuery('.modal').on('hidden.bs.modal', function (e) {
    //       jQuery('html').removeClass('freezePage');
    //       jQuery('body').removeClass('freezePage');
    //     });
    // } 

    
    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {

        jQuery('.modal').on('shown.bs.modal', function (e) {

            var current = jQuery(window).scrollTop();
            jQuery(window).scroll(function() {
                jQuery(window).scrollTop(current);
            });

        });

        jQuery('.modal').on('hidden.bs.modal', function (e) {

            jQuery(window).off('scroll');

         });

    }


    // wow animation 


     new WOW().init();
 
});

 

// select auto width


(function($, window){
  var arrowWidth = 5;

  $.fn.resizeselect = function(settings) {  
    return this.each(function() { 

      $(this).change(function(){
        var $this = $(this);

        // create test element
        var text = $this.find("option:selected").text();
        
        var $test = $("<span>").html(text).css({
          "font-size": $this.css("font-size"), // ensures same size text
          "visibility": "hidden"               // prevents FOUC
        });
        
        // add to body, get width, and get out
        $test.appendTo($this.parent());
        var width = $test.width();
        $test.remove();

        // set select width
        $this.width(width + arrowWidth);

        // run on start
      }).change();

    });
  };

  // run by default
  $("select.resizeselect").resizeselect();                       

})(jQuery, window);