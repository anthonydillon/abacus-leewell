<?php

/**
 * Homepage Template
 *
 *
 * @file           homepage.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Home */

get_header(); ?>

    <div class="wrapper">
        <div class="row row-hero no-border">
            <div class="inner-wrapper align-center">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video-play.svg" alt="Play video" width="150" height="150" /></a>
            </div>
        </div>
        <div class="row clouds-top no-border"></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row no-border">
            <div class="inner-wrapper">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>

        <div class="clouds-bottom"></div>

        <div class="row no-border strip-office">
          <div class="inner-wrapper align-center">
            <p class="large-font">GIVE US A CALL, WE LOVE TO TALK</p>
            <p class="large-font">01462 700229</p>
          </div>
        </div>

        <div class="row no-border strip-grey">
          <div class="inner-wrapper">
              <h2 class="muted-heading">Authorised Dealers</h2>
              <ul class="inline-logos clear">
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-brother.png" alt="" /></li>
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-fijitsu.png" alt="" /></li>
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-kaspersky.png" alt="" /></li>
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-hp.png" alt="" /></li>
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-microsoft.png" alt="" /></li>
              </ul>
          </div>
        </div>
    </div>

<?php get_footer(); ?>
