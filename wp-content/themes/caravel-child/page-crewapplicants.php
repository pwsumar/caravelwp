<?php
/**
 * Template Name: Crew Applicants
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
	<div class="bg-inline banner-bg banner-subpage" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/subpage-banner-img.jpg');"></div>
	<div class="banner-caption subpage-banner-caption">
		<h1>Crew Applicants</h1>
	</div>
</div>

<div class="section-content section-crewapplicants">
	<div class="container">
		<p><?php the_content(); ?></p>
		
	</div>
</div>

<div class="section-content section-required-docs gray-bg">
	<div class="container">
		<div class="col-md-4">
			<div class="section-title">
				<h3>required documents</h3>
			</div>
		</div>

		<div class="col-md-8">
			<ul>
				<?php if (have_rows('required_list')): ?>
				<?php while (have_rows('required_list')): the_row(); ?>
					<li><?php the_sub_field('required_docs'); ?></li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<div class="section-apply afterclear">
	<div class="col-md-6 p-0">
		<a href="<?php echo site_url(); ?>/application-form/">
			<div data-toggle="collapse" data-target="#apply-online">
				<div class="apply-link bg-inline" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-personal.png');">
					<div class="section-title">
						<div class="transform-50 width-full text-center">
							<h3>apply online</h3>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>

	<div class="col-md-6 p-0">
		<a href="<?php echo site_url(); ?>/list-of-crew-trainings/">
			<div data-toggle="collapse" data-target="#list-crewtrainings">
				<div class="apply-link bg-inline" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-online.png');">
					<div class="section-title">
						<div class="transform-50 width-full text-center">
							<h3>list of crew training</h3>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<!-- <div id="apply-online" class="collapse">
		    <div class="section-content container-custom afterclear">
		    	<div class="container">
		    		<div class="col-md-3">
			    		<div class="section-title">
							<h3>download and apply</h3>
						</div>
			    	</div>

			    	<div class="col-md-9">
			    		<div class="bordered-bottom">
			    			<div class="req-number">
			    				<p>1</p>
			    			</div>
			    			<div class="req-desc">
			    				<h5>Download application form.</h5>
			    				<ul>
			    					<li><a href="#">Interior Application Form</a></li>
			    					<li><a href="#">Deck Application Form</a></li>
			    					<li><a href="#">Engine Application Form</a></li>
			    				</ul>
			    			</div>
			    		</div>

			    		<div class="bordered-bottom">
			    			<div class="req-number">
			    				<p>2</p>
			    			</div>
			    			<div class="req-desc">
			    				<h5>Fill out the application form and gather the required documents listed above.</h5>
			    				<a href="#">Download list of required documents here</a>
			    			</div>
			    		</div>

			    		<div class="bordered-bottom">
			    			<div class="req-number">
			    				<p>3</p>
			    			</div>
			    			<div class="req-desc">
			    				<h5>File and fasten the application forms and requirements in a long white folder. Submit them to the Recruitment Department. You can deliver by hand or courier.</h5>

			    				
			    				<div class="req-address">
			    					<h4 class="text-gray">address</h4>
			    					<p>4/F Bankways Building
									Gov. M. Cuenco Ave., Sitio Baca, 
									Apas, Cebu City 6000 Philippines</p>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		</div> -->
		<div id="list-crewtrainings" class="collapse">
			
		</div>
</div>

<?php
endwhile; else :
endif;
get_footer(); ?>