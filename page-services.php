<?php

/**
 * Page Template
 *
 *
 * @file           page.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Services */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row row-hero strip-dark">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="row clouds-top"></div>

<div class="row">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
				<?php the_field('section_1', false, false); ?>
		</div>
	</div>
</div>

<div class="row row-services">
	<div class="inner-wrapper">
    <a href="#plan" class="box plan">
      <h3>PLAN</h3>
      <ul class="no-bullets">
        <li class="no-margin-bottom">AUDIT</li>
        <li class="no-margin-bottom">DISCOVERY</li>
        <li class="no-margin-bottom">REQUIREMENTS GATHERING</li>
      </ul>
    </a>

    <a href="#design" class="box design-implement">
      <h3>DESIGN &amp; IMPLEMENT</h3>
      <ul class="no-bullets">
        <li class="no-margin-bottom">CONFIGURE/BUILD INSTALL</li>
        <li class="no-margin-bottom">DEPLOY/ROLL-OUT</li>
        <li class="no-margin-bottom">INTEGRATE</li>
      </ul>
    </a>

    <a href="#manage" class="box manage">
      <h3>MANAGE</h3>
      <ul class="no-bullets">
        <li class="no-margin-bottom">PEFORMANCE MONITORING &amp; REPORTING</li>
        <li class="no-margin-bottom">PERFORMANCE MANAGEMENT</li>
        <li class="no-margin-bottom">OUTSOURCING</li>
      </ul>
    </a>

    <a href="#support" class="box support">
      <h3>SUPPORT</h3>
      <ul class="no-bullets">
        <li class="no-margin-bottom">MAINTENACE &amp; REPAIR</li>
        <li class="no-margin-bottom">BREAK FIX</li>
      </ul>
    </a>

    <a href="#optimise" class="box optimise">
      <h3>OPTIMISE</h3>
      <ul class="no-bullets">
        <li class="no-margin-bottom">LEVERAGING INFRASTRUCTURE</li>
        <li class="no-margin-bottom">THROUGH TECHNOLOGY</li>
        <li class="no-margin-bottom">ADVANCEMENTS</li>
        <li class="no-margin-bottom">ETHICAL</li>
      </ul>
    </a>
  </div>
</div>

<div class="row section-2">
  <div class="inner-wrapper">
    <div class="eight-col prepend-two">
			<?php the_field('section_2', false, false); ?>
		</div>
  </div>
</div>

<?php endwhile; else : ?>
	<div class="row row-hero strip-dark">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Page not found: 404</h1>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
