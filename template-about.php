<?php
/**

 Template Name: About
 */

get_header();
global $it_breeze;
$mission = get_field('mission');
$vision = get_field('vision');
$message = get_field('message');
$trainers_name = get_field('trainers_name');
$trainers_designation = get_field('trainers_designation');
$trainers_phone = get_field('trainers_phone');
$trainers_name_2 = get_field('trainers_name_2');
$trainers_designation_2 = get_field('trainers_designation_2');
$trainers_phone_2 = get_field('trainers_phone_2');
$board_of_directors_name = get_field('board_of_directors_name');
$board_of_directors_designation = get_field('board_of_directors_designation');
$board_of_directors_name_2 = get_field('board_of_directors_name_2');
$board_of_directors_name_3 = get_field('board_of_directors_name_3');
$board_of_directors_designation_2 = get_field('board_of_directors_designation_2');
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>About us</h1>
		</div>
		<!-- =========================Start Col left section ============================= -->   
		<aside class="col-md-4 col-sm-4">
			<div class="col-left">

			    <div class="strip-staff">
				    <div class="row">
				        <div class="col-md-12">
				            <h4>Our Trainers </h4>
				             <h4 style="font-size: 16px"><?php echo $trainers_name ?><em><?php echo $trainers_designation ?></em></h4>
				            
				            <ul class="data-staff">
				                <li><i class="fa fa-phone"></i> <?php echo $trainers_phone ?></li>
				                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
				                <li><a href="#"><i class="fa fa-skype"></i></a></li>
				                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				            </ul><br>
				        </div>
				        <div class="col-md-12">
				            <h4 style="font-size: 16px"><?php echo $trainers_name_2 ?><em><?php echo $trainers_designation_2 ?></em></h4>
				            
				            <ul class="data-staff">
				                <li><i class="fa fa-phone"></i> <?php echo $trainers_phone_2 ?></li>
				                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
				                <li><a href="#"><i class="fa fa-skype"></i></a></li>
				                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				            </ul>
				        </div>
				    </div>
				</div>		    
				<div class="strip-staff">
				    <div class="row">
				        <div class="col-md-12">
				            <h4>Board of Directors </h4>
				            <h4 style="font-size: 16px"><?php echo $board_of_directors_name ?><em><?php echo $board_of_directors_designation ?></em></h4>
				        </div>
				        <div class="col-md-12">
				            <h4 style="font-size: 16px"><?php echo $board_of_directors_name_2 ?><em><?php echo $board_of_directors_designation_2 ?></em></h4>
				        </div>
				        <div class="col-md-12">
				            <h4 style="font-size: 16px"><?php echo $board_of_directors_name_3 ?><em></em></h4>
				        </div>
				    </div>
				</div>
			</div><!--End col left -->
		</aside>

		<!-- =========================Start Col right section ============================= --> 
		<section class="col-md-8 col-sm-8">
			<div class="col-right">
			<div class="main-img">
	            <img src="<?php echo get_template_directory_uri()?>/images/staff.jpg" alt="" class="img-responsive" >
	            <p class="lead">Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id. </p>
	        </div>
    
		       <h4>Mission</h4>
				<p style="font-size: 16px;line-height: 20px;"><?php echo $mission ?>
				</p>
				
				<hr>
		        
				<h4>Vision</h4>
				<p style="font-size: 16px;line-height: 20px;"><?php echo $vision ?>
				</p>
			
				<hr>
		        
				<h4>Message from Chairman </h4>
				<p style="font-size: 16px;line-height: 20px;"><?php echo $message ?>  

				</p>
				<p><a href="contact.html" class=" button_medium">Apply now</a></p>

			</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div> <!-- end container-->

<?php
get_footer();
