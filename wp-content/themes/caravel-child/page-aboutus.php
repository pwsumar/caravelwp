<?php
/**
 * Template Name: About Us
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
		<div class="bg-inline banner-bg banner-subpage" style="background-image: url('<?php echo $bg_img[0]; ?>');"></div>
		<div class="banner-caption subpage-banner-caption">
			<h1><?php the_title(); ?></h1>
		</div>
</div>

<div class="section-content section--about">
	<div class="container">
		<div class="col-md-5">

			<div class="about-code-holder">
				<div class="about-code">
					<h4 class="text-gray"><?php the_field('accredited_title'); ?></h4>
					<p><?php the_field('accredited_text'); ?></p>
				</div>

				<div class="about-code">
					<h4 class="text-gray"><?php the_field('registered_title'); ?></h4>
					<p><?php the_field('registered_text'); ?></p>
				</div>
			</div>

			<div class="img-holder">
                <img src="<?php the_field('office_building'); ?>" alt="">
            </div>
		</div>

		<div class="col-md-7">
			<div class="about-text">

				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
</div>
<?php if (have_rows('fleet_content')): ?>
  	<?php $counter=0; while (have_rows('fleet_content')): the_row(); ?>
	<div class="section-core-values section-mission-vision">
		<div class="container">
			<div class="">
				<div class="core-values-holder afterclear">
		            <div class="col-md-6 <?php if($counter%2 == 1){echo 'pull-right';}?>">
                      	<div class="section-title">
                          	<h3><?php the_sub_field('our_fleet_header'); ?></h3>
                          	<p><?php the_sub_field('our_fleet_text'); ?></p>
                      	</div>
                  	</div>
                  	<div class="col-md-6">
                      	<div class="img-holder">
                          	<img src="<?php the_sub_field('our_fleet_image'); ?>" alt="">
                      	</div>
                      	<div class="img-desc">
                          	<p><?php the_sub_field('our_fleet_name'); ?></p>
                      	</div>
                  	</div>
		        </div>
			</div>
			
		</div>
	</div>
	<?php $counter++; endwhile; ?>
<?php endif; ?>


	<div class="section-content section-ourteam gray-bg">
		<div class="container container-custom">
			<div class="section-title section--title text-center">
				<h3><?php the_field('team_section_title'); ?></h3>
				<p><?php the_field('team_section_text'); ?></p>
			</div>

			<?php if (have_rows('our_team_section')): ?>
				<?php while (have_rows('our_team_section')): the_row(); ?>

					<div class="team-list">
						<ul>
							<li>
								<div class="team-holder afterclear">
									<div class="col-md-6">
										<div class="team-image">
											<img src="<?php the_sub_field('team_picture'); ?>" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="team-desc">
											<p><?php the_sub_field('team_name'); ?></p>
											<span><?php the_sub_field('team_position'); ?></span>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php
endwhile; else :
endif;
get_footer(); ?>