<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="navbar navbar-default navbar-home">
    <div class="container container-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="<?php echo of_get_option('logo', 'no entry');?>" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-menu-collapse" id="bs-example-navbar-collapse-1">
            <!-- <ul class="nav navbar-nav navbar-nav-menu navbar-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="page-aboutus.php">About Us</a></li>
                <li><a href="page-services.php">Services</a></li>
                <li><a href="page-crewapplicants.php">Crew Applicants</a></li>
                <li><a href="page-contactus.php">Contact Us</a></li>
            </ul> -->

            <?php wp_nav_menu( array( 'menu' => 'Main Menu', 'menu_class' => 'nav navbar-nav navbar-nav-menu navbar-right' ) ); ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>