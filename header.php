<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ITbreeze
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>EDU - Educational, College and Courses Boostrap site template with Responsive Megamenu</title>
	<meta name="description" content="EDU - Educational, College and Courses Boostrap site template with Responsive Megamenu 14$">
	<meta name="author" content="Ansonika">

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/fullwidth.css" media="screen" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/settings.css" media="screen" >


	<!-- Jquery -->
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
	<!-- Support media queries for IE8 -->
	<script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>

	<!-- HTML5 and CSS3-in older browsers-->
	<script src="<?php echo get_template_directory_uri();?>/js/modernizr.custom.17475.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<!--[if IE 7]>
	<link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
	<![endif]-->

	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<div class="container">
	   	  <div class="row">
	    	<div class="col-md-4 col-sm-4" id="logo">
	    		<?php if( has_custom_logo() ) { 
              the_custom_logo(); 
                } else { ?>
                <a class="logo" alt="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php } ?>
	    	</div>
	        <div class="col-md-8 col-sm-8">
	        
	        	<div id="phone" class="hidden-xs"><strong><?php echo get_theme_mod( 'header_phone_block'); ?></strong>Admissions department</div>

	        </div><!-- End col-md-8-->
	        </div><!-- End row-->
	    </div><!-- End container-->
	</header><!-- End Header-->


<!-- 	<nav>
	    <div class="megamenu_container">
	    <a id="megamenu-button-mobile" href="#">Menu</a>

	        <ul class="megamenu">
	            <li><a href="index.html" class="drop-down">Home</a></li>
	            
	            <li><a href="about.html" class="drop-down">About</a></li>

	            <li><a href="all-courses.html" class="drop-down">Courses</a></li>

	            <li><a href="contacts.html" class="drop-down">Contacts</a></li>
	        </ul>
	    </div>
	</nav> -->
	
	<nav>
		<div class="megamenu_container">
		    <a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
	    		<?php
	            wp_nav_menu( array(
				    'theme_location' => 'menu-1',
				    'container' => 'ul',
				    'menu_class'=> 'megamenu'
	            ) );
	        ?>
	    </div>
	</nav> 