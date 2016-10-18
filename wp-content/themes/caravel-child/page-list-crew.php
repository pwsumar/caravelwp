<?php
/**
 * Template Name: List of Crew Trainings
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
		<h1>List of Crew Trainings</h1>
	</div>
</div>

<div class="section-content section-crewapplicants">
	<div class="container">
		<p><?php the_content(); ?></p>
	</div>s
</div>

<div class="section-content section-required-docs gray-bg">
	<div class="container-fluid">
		<table>
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Training Course</th>
		      <th>Capt.</th>
		      <th>CO</th>
		      <th>2O</th>
		      <th>3O</th>
		      <th>CE</th>
		      <th>1AE</th>
		      <th>2AE</th>
		      <th>3AE</th>
		      <th>BSN</th>
		      <th>AB</th>
		      <th>OS</th>
		      <th>OLR</th>
		      <th>WPR</th>
		      <th>CCK</th>
		      <th>MSM</th>
		      <th>DC</th>
		      <th>EC</th>
		      <th>COP Remark</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (have_rows('list_of_crew_trainings')): ?>
				<?php while (have_rows('list_of_crew_trainings')): the_row(); ?>
				    <tr>
				      <td data-label="No"><?php the_sub_field('no'); ?></td>
				      <td data-label="Training Course"><?php the_sub_field('training_course'); ?></td>
					  <td data-label="Capt." class="<?php echo (get_sub_field('capt.')) ? "filled" : "empty" ; ?>"><?php the_sub_field('capt.'); ?></td>
				      <td data-label="CO" class="<?php echo (get_sub_field('co')) ? "filled" : "empty" ; ?>"><?php the_sub_field('co'); ?></td>
				      <td data-label="2O" class="<?php echo (get_sub_field('2o')) ? "filled" : "empty" ; ?>"><?php the_sub_field('2o'); ?></td>
				      <td data-label="3O" class="<?php echo (get_sub_field('3o')) ? "filled" : "empty" ; ?>"><?php the_sub_field('3o'); ?></td>
				      <td data-label="CE" class="<?php echo (get_sub_field('ce')) ? "filled" : "empty" ; ?>"><?php the_sub_field('ce'); ?></td>
				      <td data-label="1AE" class="<?php echo (get_sub_field('1ae')) ? "filled" : "empty" ; ?>"><?php the_sub_field('1ae'); ?></td>
				      <td data-label="2AE" class="<?php echo (get_sub_field('2ae')) ? "filled" : "empty" ; ?>"><?php the_sub_field('2ae'); ?></td>
				      <td data-label="3AE" class="<?php echo (get_sub_field('3ae')) ? "filled" : "empty" ; ?>"><?php the_sub_field('3ae'); ?></td>
				      <td data-label="BSN" class="<?php echo (get_sub_field('bsn')) ? "filled" : "empty" ; ?>"><?php the_sub_field('bsn'); ?></td>
				      <td data-label="AB" class="<?php echo (get_sub_field('ab')) ? "filled" : "empty" ; ?>"><?php the_sub_field('ab'); ?></td>
				      <td data-label="OS" class="<?php echo (get_sub_field('os')) ? "filled" : "empty" ; ?>"><?php the_sub_field('os'); ?></td>
				      <td data-label="OLR" class="<?php echo (get_sub_field('olr')) ? "filled" : "empty" ; ?>"><?php the_sub_field('olr'); ?></td>
				      <td data-label="WPR" class="<?php echo (get_sub_field('wpr')) ? "filled" : "empty" ; ?>"><?php the_sub_field('wpr'); ?></td>
				      <td data-label="CCK" class="<?php echo (get_sub_field('cck')) ? "filled" : "empty" ; ?>"><?php the_sub_field('cck'); ?></td>
				      <td data-label="MSM" class="<?php echo (get_sub_field('msm')) ? "filled" : "empty" ; ?>"><?php the_sub_field('msm'); ?></td>
				      <td data-label="DC" class="<?php echo (get_sub_field('dc')) ? "filled" : "empty" ; ?>"><?php the_sub_field('dc'); ?></td>
				      <td data-label="EC" class="<?php echo (get_sub_field('ec')) ? "filled" : "empty" ; ?>"><?php the_sub_field('ec'); ?></td>
				      <td data-label="COP Remark"><?php the_sub_field('cop_remark'); ?></td>
				    </tr>
		    	<?php endwhile; ?>
			<?php endif; ?>
		  </tbody>
		</table>
		<div class="legend-holder">
			<h5>Legend: </h5>
			<div class="legend-color">
				<div class="legend--red">
					<div class="legend-red"></div>
					<div class="legend-red-desc">
						<p>( Cell in Red), Trainig is required for that rank</p>
					</div>
				</div>
				<div class="legend--gray">
					<div class="legend-gray"></div>
					<div class="legend-gray-desc">
						<p>(Empty Gray cell), Training is not required for that rank</p>
					</div>
				</div>
			</div>
		</div>
		<div class="note-list">
			<h5>Note:</h5>
			<p>All COP's can be processed through Manning, provided the officer/crew will secure the TCROA (Training Completion and Record of Assessment) report and submit to manning. Manning are advising all crew to always secure the required TCROA every after comletion of trainig.</p>
		</div>
	</div>
</div>

<?php
endwhile; else :
endif;
get_footer(); ?>