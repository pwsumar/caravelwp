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
		<p>List of Crew Trainings including the New Training Requirements Under the STCW 2010 Manila Amendments</p>
	</div>
</div>

<div class="section-content section-required-docs gray-bg">
	<div class="container">
		<table>
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Traing Course</th>
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
		    <tr>
		      <td data-label="No">1</td>
		      <td data-label="Traing Course<">BT</td>
		      <td data-label="Capt.">Req</td>
		      <td data-label="CO">Req</td>
		      <td data-label="2O">Req</td>
		      <td data-label="3O">Req</td>
		      <td data-label="CE">Req</td>
		      <td data-label="1AE">Req</td>
		      <td data-label="2AE">Req</td>
		      <td data-label="3AE">Req</td>
		      <td data-label="BSN">Req</td>
		      <td data-label="AB">Req</td>
		      <td data-label="OS">Req</td>
		      <td data-label="OLR">Req</td>
		      <td data-label="WPR">Req</td>
		      <td data-label="CCK">Req</td>
		      <td data-label="MSM">Req</td>
		      <td data-label="EC">Req</td>
		      <td data-label="COP Remark">w/ COP</td>
		    </tr>
		    <tr>
		      <td data-label="No">1</td>
		      <td data-label="Traing Course<">BT</td>
		      <td data-label="Capt.">Req</td>
		      <td data-label="CO">Req</td>
		      <td data-label="2O">Req</td>
		      <td data-label="3O">Req</td>
		      <td data-label="CE">Req</td>
		      <td data-label="1AE">Req</td>
		      <td data-label="2AE">Req</td>
		      <td data-label="3AE">Req</td>
		      <td data-label="BSN">Req</td>
		      <td data-label="AB">Req</td>
		      <td data-label="OS">Req</td>
		      <td data-label="OLR">Req</td>
		      <td data-label="WPR">Req</td>
		      <td data-label="CCK">Req</td>
		      <td data-label="MSM">Req</td>
		      <td data-label="EC">Req</td>
		      <td data-label="COP Remark">w/ COP</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>

<?php
endwhile; else :
endif;
get_footer(); ?>