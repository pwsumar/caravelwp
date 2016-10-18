<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Twenty_Twentysixteen
 * @since Twenty Twentysixteen 1.0
 */

get_header(); while ( have_posts() ) : the_post(); ?>

<div class="section-banner section-banner-subpage">
	<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
		<div class="bg-inline banner-bg banner-subpage" style="background-image: url('<?php echo $background[0]; ?>');"></div>
		<div class="banner-caption subpage-banner-caption">
			<h1><?php the_title(); ?></h1>
		</div>
	<?php endif; ?>
</div>

<div class="section-content section-contact">
	<div class="container">
		<div class="col-md-6">
			<div class="section-title">
				<h3>contact details</h3>
			</div>

			<div class="contact-details">
				<div class="contact-number">
					<div class="contact-icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="contact-desc-holder">
						<div class="contact-desc">
							<h4 class="text-gray">tel</h4>
							<a href="tel:<?php echo of_get_option('tel_number', 'no entry');?>"><?php echo of_get_option('tel_number', 'no entry');?></a>
						</div>
						<div class="contact-desc">
							<h4 class="text-gray">fax</h4>
							<a href="tel:<?php echo of_get_option('fax_number', 'no entry');?>"><?php echo of_get_option('fax_number', 'no entry');?></a>
						</div>
						<div class="contact-desc">
							<h4 class="text-gray">mobile</h4>
							<a href="tel:<?php echo of_get_option('mobile_number', 'no entry');?>"><?php echo of_get_option('mobile_number', 'no entry');?></a>
						</div>
					</div>
				</div>

				<div class="contact-address">
					<div class="contact-icon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>

					<div class="contact-desc-holder">
						<div class="contact-desc">
							<h4 class="text-gray">address</h4>
							<p><?php echo of_get_option('address', 'no entry');?></p>
						</div>
					</div>
				</div>

				<div class="contact-email">
					<div class="contact-icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>

					<div class="contact-desc-holder">
						<div class="contact-desc">
							<h4 class="text-gray">email</h4>
							<a href="mailto:<?php echo of_get_option('email', 'no entry');?>"><?php echo of_get_option('email', 'no entry');?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="section-title">
				<h3>send us a message</h3>
				<div class="contact-form">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.5073932092737!2d123.90807143331486!3d10.338688071022673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a998e0e02d3c3b%3A0x39eb5a4ef19d4f2b!2sSitio+Baca+Brgy.+Apas+0405!5e0!3m2!1sen!2sph!4v1473224493605" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php endwhile; get_footer(); ?>