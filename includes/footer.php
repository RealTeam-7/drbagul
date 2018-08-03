<footer>
<div class="container">
  <div class="row">

    <div class="col-md-3">
      <img src="images\logo3.png" alt="JollyMedic" class=" img-responsive" width="100%">
      <br>
      <p class="text-justify"> MS, FIAGES, FMAS, FCPS (Surgery), Hernia Specialist &amp; Laparoscopic Surgeon of Navi Mumbai’s Speciality Clinic dedicated for Hernia care.</p>
      <div class="social-icons">
                            <a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/1171899766"><i class="fa fa-facebook"></i></a>
                            <a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
    </div>

    <div class="col-md-3">
      <h2>Quick Links</h2>
      <br>
      <ul>
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="about.php">About</a> </li>
        <li> <a href="services.php">Services</a> </li>
        <li> <a href="gallery.php">Gallery</a> </li>
        <li> <a href="contact.php">Contact</a> </li>
      </ul>
    </div>

    <div class="col-md-3">
      <h2>Sevices</h2>
      <br>
      <ul style="padding-left:0">
        <li><a href="3dstichless.htm">3-D Stitchless Hernia Surgery</a></li>
        <li><a href="stichlessoctomesh.htm">Stitchless Octomesh Surgery</a></li>
        <li><a href="generalsurgery.htm">General Surgery	</a></li>
        <li><a href="laparoscopic.htm">Laparoscopic Surgery</a></li>
        <li><a href="StapledHemorrhoidectomy.htm">Stapled Hemorrhoidectomy</a></li>
      </ul>
    </div>

    <div class="col-md-3">
      <h2>Get In Touch</h2>
      <br>
      <h4> (+91) 9820144713</h4>
      <p>info@drbagul.in</p>
      <p>C7, Budhyadev Mandir Marg, Sector 4, Sanpada, Navi Mumbai, Maharashtra 400705</p>
    </div>

  </div>
</div>
</footer>
<section class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <p>Copyright © Dr.Bagul 2018. All rights reserved. </p>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <p>Created By <a href="https://www.cyberrafting.com">Cyber Rafting</a> </p>
      </div>
    </div>
  </div>
</section>


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
