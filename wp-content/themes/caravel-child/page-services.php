<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Twenty_Twentysixteen
 * @since Twenty Twentysixteen 1.0
 */

get_header(); ?>

<div class="section-banner section-banner-subpage">
	<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
		<div class="bg-inline banner-bg banner-subpage" style="background-image: url('<?php echo $background[0]; ?>');"></div>
		<div class="banner-caption subpage-banner-caption">
			<h1><?php the_title(); ?></h1>
		</div>
	<?php endif; ?>
</div>

<div class="section-content services-content">
	<div class="gap-50"></div>
	<div class="container">
		<?php if (have_rows('services_content')): ?>
         	<?php $counter=0; while (have_rows('services_content')): the_row(); ?>
				<div class="col-md-5">
					<div class="img-holder">
						<img src="<?php the_sub_field('services_image'); ?>" alt="">
					</div>
				</div>

				<div class="col-md-7">
					<div class="about-bottom-desc">
						<p><?php the_sub_field('services_text'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>	
	</div>
</div>

<div class="section-content">
	<div class="container">
		<div class="section-title text-center">
			<h3><?php the_field('what_we_do_title'); ?></h3>
		</div>

		<div class="we-do-list-holder">
			<?php if (have_rows('what_we_do_list')): ?>
				<?php while (have_rows('what_we_do_list')): the_row(); ?>
					<div class="col-md-3">
						<div class="what-we-do-list text-center">
							<div class="transform-50 width-full">
								<p><?php the_sub_field('services_list'); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="section-content section-red">
    <div class="container container-custom">
        <div class="bottom-section text-center">
            <h3>Get in Touch</h3>
            <p>Send us a message to avail of our services.</p>
            <a href="" class="btn-common">Contact us</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>

