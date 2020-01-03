<?php
/**

 Template Name: Contacts
 */

get_header();

global $it_breeze;
$address = get_field('address');
$phone = get_field('phone');
$email = get_field('email');
$map = get_field('map');
?>

<div class="container">
	
	<div class="row">
    	<div class="col-md-12">
		<h1>Contacts</h1>
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a><span class="divider">/</span></li>
				<li class="active">Contact</li>
			</ul>
		</div>
        <!-- =========================Start Col left section ============================= -->
		<aside  class="col-md-4 col-sm-4">
		<div class="col-left">
			<h3>Address</h3>
			<ul>
				<li><i class="fa fa-home"></i> <?php echo $address ?></li>
				<li><i class="fa fa-phone"></i> <?php echo $phone ?></li>
				<li><i class="fa fa-envelope"></i> Email: <?php echo $email ?></li>
			</ul>
			<hr>
			<iframe height="250" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973&amp;output=embed" style="border:0;">
			</iframe>
			<br/>
			<small><a href="https://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973" style="text-align:left">View bigger</a></small>  
		</div>
		</aside>
        
        <!-- =========================Start Col right section ============================= -->
		<section class="col-md-8 col-sm-8">
		<div class="col-right">
			<h4>General Enquire or Apply</h4>
            
			<div id="message-contact"></div>
			<form method="post" action="assets/contact.php" id="contactform">
			<?php echo do_shortcode('[contact-form-7 id="37" title="itbreezr-form"]')?>
				<hr>
			</form>            
		</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div><!-- end container-->

<?php
get_footer();
