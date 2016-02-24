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
        <div class="row no-border">
          <div class="inner-wrapper">
            <div class="slider">
              <div class="twelve-col">
                <div class="four-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-services.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
                <div class="four-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-products.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
                <div class="four-col last-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-solutions.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
              </div>
              <div class="twelve-col">
                <div class="four-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-news.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
                <div class="four-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-repairs.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
                <div class="four-col last-col align-center">
                  <img src="<?php bloginfo('template_directory'); ?>/img/icon-contact.png" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lacus id eleifend aliquam, ipsum ante vehicula massa, non laoreet dolor arcu vel dui.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-avg.png" alt="AVG" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-brother.png" alt="Brother" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-cisco.png" alt="Cisco" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-cisco-meraki.png" alt="Cisco Meraki" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-fijitsu.png" alt="Fijitsu" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-hp.png" alt="HP" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-kaspersky.png" alt="Kaspersky" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-microsoft.png" alt="Microsoft" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-oki.png" alt="OKI" class="inline-logos__image" /></li>
        				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-utax.png" alt="UTAX" class="inline-logos__image" /></li>
              </ul>
          </div>
        </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick(
        {speed: 300}
      );
    });
  </script>

<?php get_footer(); ?>
