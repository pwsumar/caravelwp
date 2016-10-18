<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ph_01.jpg" alt="">
    </div>
  </div>
</div>

<div class="section-banner banner-home">
    <?php if (have_rows('main_banner')): ?>
        <?php while (have_rows('main_banner')): the_row(); ?>
            <div class="banner-holder">
                <div class="banner-bg bg-inline" style="background-image: url(<?php the_sub_field('banner_image'); ?>)"></div>
            </div>
            <div class="banner-caption">
                <div class="banner-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-logo.png" alt="">
                    <div class="gap-100"></div>
                </div>
                <div class="banner-desc">
                    <h1 class="animated-up"><?php the_sub_field('banner_text'); ?></h1>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="section-content section-about bg-inline" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-wave.png'); ">
    <div class="container container-custom">
        <?php if (have_rows('home_content')): ?>
            <?php while (have_rows('home_content')): the_row(); ?>
                <div class="section-desc-about">
                    <div class="about-content about-img p-relative">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/boat2.png" alt="">
                    </div>
                    <div class="about-content about--content">
                        <div class="gap-100"></div>
                        <div class="about-title">
                            <div class="about-title-holder">
                                <h2>car</h2>
                                <span></span>
                            </div>
                            <div class="about-title-holder">
                                <h2>a</h2>
                                <span></span>
                            </div>
                            <div class="about-title-holder">
                                <h2>vel</h2>
                            </div>
                        </div>
                        <div class="about-lang">
                            <p>(Portuguese: caravela, IPA: <span>[kɐɾɐˈvɛlɐ]</span></p>
                        </div>
                        <div class="about-desc">
                            <p><?php the_sub_field('caravel_meaning'); ?></p>
                            <p class="text-right resources">by wikipedia</p>
                        </div>
                        <div class="about-bottom-desc">
                            <div class="gap-50"></div>
                           <p><?php the_sub_field('caravel_meaning_2nd'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="section-content">
    <div class="container container-custom">
        <div class="section-title text-center">
            <h3>Core Values Stand by it's time</h3>
        </div>
        <div class="gap-50"></div>
        <div class="section-text-clip text-center">
            <h1>
                <span style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/text-bg.jpg');">Caravel</span>
            </h1>
            <div class="text-clip-acronym afterclear">
                <div class="acronym-holder">
                    <p><span>C</span>ourageous</p>
                </div>
                <div class="acronym-holder">
                    <p><span>A</span>ctive</p>
                </div>
                <div class="acronym-holder">
                    <p><span>R</span>esponsive</p>
                </div>
                <div class="acronym-holder">
                    <p><span>A</span>dvanced</p>
                </div>
                <div class="acronym-holder">
                    <p><span>V</span>aluable</p>
                </div>
                <div class="acronym-holder">
                    <p><span>E</span>ffective</p>
                </div>
                <div class="acronym-holder">
                    <p><span>L</span>eading People</p>
                </div>
            </div>
            
        </div>
        <?php if (have_rows('fleet_content')): ?>
          <?php $counter=0; while (have_rows('fleet_content')): the_row(); ?>
            <div class="section-core-values">
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
        <?php $counter++; endwhile; ?>
      <?php endif; ?>
    </div>
</div>
<div class="section-content section-red">
    <div class="container container-custom">
        <div class="bottom-section text-center">
          <?php if (have_rows('home_our_team')): ?>
            <?php $counter=0; while (have_rows('home_our_team')): the_row(); ?>
              <h3><?php the_sub_field('out_team_header'); ?></h3>
              <p><?php the_sub_field('our_team_text'); ?></p>
              <a href="" class="btn-common">Join us</a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
