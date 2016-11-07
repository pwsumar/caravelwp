<?php
/**
 * Template Name: Thank You Page
 *
 * @package WordPress
 * @subpackage Twenty_Twentysixteen
 * @since Twenty Twentysixteen 1.0
 */

get_header(); 

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="section-banner section-banner-subpage">
	<div class="bg-inline banner-bg banner-subpage" style="background-image: url('images/subpage-banner-img.jpg');"></div>
	<div class="banner-caption subpage-banner-caption">
		<h1>Application Form</h1>
	</div>
</div>

<?php 
	$to          = "philwebservices.sumar@gmail.com";
	$subject     = "Documents";
	$form_data   = $_POST;
	$message     = form_template($form_data);
	$headers     = "";
	$attachments = "";
		
	wp_mail( $to, $subject, $message, $headers, $attachments );
?>
<div class="section-content section-crewapplicants section-thankyou">
	<div class="container text-center">
		<h3>Thank You!</h3>
		<p>
			Your application has been submitted. We will contact you as soon as we have reviewed your application. For more information, you may contact us at</p>
		<div class="phone-numbers">
			<div class="phone-list">
				<span>tel</span>
				<p>+63 32 412 0660</p>
			</div>
			<div class="phone-list">
				<span>fax</span>
				<p>+63 32 412 0660</p>
			</div>
			<div class="phone-list">
				<span>mobile</span>
				<p>+63 32 412 0660</p>
			</div>
		</div>
	</div>
</div>

<?php
endwhile; else :
endif;
get_footer(); ?>

