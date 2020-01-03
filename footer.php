<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ITbreeze
 */

?>

   </div><!-- end container-->
  
  <footer>
  <div class="container">
  	<div class="row">
    	<div class="col-md-4 col-sm-4" id="brand-footer">
              <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
        </div>

        <div class="col-md-4 col-sm-4" id="contacts-footer">
        	 <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
        </div>

        <div class="col-md-4 col-sm-4" id="quick-links">
        	 <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
        </div>
        
    </div>
  </div>
  </footer><!-- End footer-->
<div id="toTop">Back to Top</div>

 

<!-- MEGAMENU --> 
<script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.js"></script>
<script src="js/megamenu.js"></script>

<!-- OTHER JS -->    
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
<!-- <script src="js/functions.js"></script>
<script src="assets/validate.js"></script>  -->

<!-- FANCYBOX -->
<!-- <script  src="js/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="js//jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script>  -->

 <!-- REVOLUTION SLIDER -->
 <script src="<?php echo get_template_directory_uri();?>/js/jquery.themepunch.plugins.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.themepunch.revolution.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/js/revolutio-slider-func.js"></script>
 <script>
   // MENU MOBILE ===============================================================================
// Collpsable menu mobile and tablets

  $("#megamenu-button-mobile").click(function(){
    $(".megamenu").slideToggle(400);
    $(this).toggleClass("active");
  });

// MENU DROP DOWN ====================================== //
 $(document).ready(function() {
    $(".megamenu .drop-down").click(function() {
      if($(this).next("div").is(":visible")){
        $(this).next("div").slideToggle("normal");
      } else {
        $(".megamenu .drop-down-container").fadeOut("fast");
        $(this).next("div").slideToggle("slow");
    
    $("#map_1").each(function(){                         
    var embed ="<iframe style='height:300px; width:100%; border:0' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2482.336900888852!2d-0.18850530000000001!3d51.52538029999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10d04b6d1a254faa!2sMaida+Vale+Library!5e0!3m2!1sit!2sit!4v1410245771307'></iframe>";
                                $(this).html(embed);                    
   }); 
      }
    });
  });
  

// DROP DOWN MENU TABS ====================================== //
$('body').on('click', 'ul.tabs > li > a', function(e) {

    //Get Location of tab's content
    var contentLocation = $(this).attr('href');

    //Let go if not a hashed one
    if(contentLocation.charAt(0)=="#") {

        e.preventDefault();

        //Make Tab Active
        $(this).parent().siblings().children('a').removeClass('active');
        $(this).addClass('active');

        //Show Tab Content & add active class
        $(contentLocation).show().addClass('active').siblings().hide().removeClass('active');

    }
});
 </script>

<?php wp_footer(); ?>

</body>
</html>
