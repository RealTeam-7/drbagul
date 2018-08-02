<!-- Main Scripts-->

<script src="js\jquery.js"></script>
<script src="js\bootstrap.min.js"></script>
  <script src="js\bootstrap-datetimepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/owl.carousel.min.js"></script>
<script src="js\menu.js"></script>
<script src="js\retina-1.1.0.js"></script>
<script src="js\custom.js"></script>
<script src="js\style-customizer.js"></script>
<!-- CALENDAR WIDGET -->
<script type="text/javascript">
  (function($) {
    "use strict";
    $('.form_datetime').datetimepicker({
      weekStart: 1,
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
  })(jQuery);
</script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin\js\jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin\js\jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">
  (function($) {
    "use strict";
    var revapi;
    jQuery(document).ready(function() {
      revapi = jQuery('.tp-banner').revolution(
      {
        delay:9000,
        startwidth:1170,
        startheight:560,
        hideThumbs:10,
        fullWidth:"on",
        forceFullWidth:"on"
      });
    });	//ready
  })(jQuery);
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.sendMessage').click(function(){
      var name = $('.name').val();
      var mobileNumber = $('.mobileNumber').val();
      var data = "name="+name+"&mobileNumber="+mobileNumber;
      if(name != '' && mobileNumber != '')
      {
        $.ajax({
          type : "POST",
          url : "http://drbagul.in/sendSms.php",
          data : data,
          success : function(response)
          {
            //console.log(response);
            swal({
              title: "Message send.",
              text: "We will get back to you soon...",
              icon: "success",
              button: "Close",
            });
          }
        });
      }
      else
      {
        swal({
          title: "Something went wrong.",
          text: "Name and number are required.",
          icon: "warning",
          button: "Close",
        });
      }

    });
  });
</script>
<!-- CAROUSEL WIDGET -->
<!-- <script src="js\owl.carousel.min.js"></script> -->
<script>
  (function($) {
    "use strict";
    // OWL Carousel
    $("#owl-testimonial-widget").owlCarousel({
      items : 2,
      lazyLoad : true,
      navigation : true,
      pagination : false,
      autoPlay: false
    });

    // OWL Carousel
    $(".owl-blog").owlCarousel({
      items : 3,
      lazyLoad : true,
      navigation : true,
      pagination : false,
      autoPlay: false
    });
  })(jQuery);
</script>

<script type="text/javascript">
  $(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
  })
</script>
