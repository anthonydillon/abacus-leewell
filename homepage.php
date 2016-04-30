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
                <!-- <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video-play.svg" alt="Play video" width="150" height="150" /></a> -->
            </div>
        </div>

        <div class="row clouds-top no-border"></div>
        <div class="row no-border">
          <div class="inner-wrapper">
            <div class="slider main-contact">
              <div class="twelve-col no-margin-bottom">
                <div class="four-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/services">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-services.png" alt="" class="slider-image" />
                    <h2 class="slider-title">Services</h2>
                    <p class="slider-text">Break-fix to Managed Remote Support and all sizes of project delivery</p>
                  </a>
                </div>
                <div class="four-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/products">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-products.png" alt="" class="slider-image" />
                    <h2 class="slider-title">Products</h2>
                    <p class="slider-text">We partner with the world leading IT hardware manufacturers and software vendors</p>
                  </a>
                </div>
                <div class="four-col last-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/solutions">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-solutions.png" alt="" class="slider-image" />
                    <h2 class="slider-title">Solutions</h2>
                    <p class="slider-text">High quality infrastructure solutions to improve productivity (Office 365) to cost saving print solutions.</p>
                  </a>
                </div>
              </div>
              <div class="twelve-col no-margin-bottom">
                <div class="four-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/news-centre">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-news.png" alt="" class="slider-image" />
                    <h2 class="slider-title">News centre</h2>
                    <p class="slider-text">The latest Abacus Leewell news including our Blog, Case Studies and social media updates.</p>
                  </a>
                </div>
                <div class="four-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/services/maintenance-repair/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-repairs.png" alt="" class="slider-image" />
                    <h2 class="slider-title">Repairs</h2>
                    <p class="slider-text">Book a repair &mdash; server, laptop, desktop, printer and much, much more.</p>
                  </a>
                </div>
                <div class="four-col last-col align-center no-margin-bottom">
                  <a href="<?php echo site_url(); ?>/contact">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-contact.png" alt="" class="slider-image" />
                    <h2 class="slider-title">Contact</h2>
                    <p class="slider-text">All our contact details in one place</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clouds-bottom"></div>

        <div class="row no-border strip-office">
          <div class="inner-wrapper align-center">
            <div class="eight-col prepend-two">
              <h2>Abacus Leewell have been delivering IT &amp; office solutions since 1969</h2>
              <p>We partner with our customers to deliver the best in class solutions, that fully address the customer&rsquo;s business need and meets the timescales and budget available</p>
              <p class="large-font">GIVE US A CALL, WE LOVE TO TALK</p>
              <p class="large-font">01462 700229</p>
            </div>
          </div>
        </div>

        <div class="row no-border strip-grey">
          <div>
              <h2 class="muted-heading">Authorised Partners</h2>
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
