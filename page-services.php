<?php

/**
 * Page Template
 *
 *
 * @file           page.php
 * @package        Jolly Topers FC
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Services */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="row clouds-top no-border"></div>

<div class="row no-border">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php
        global $more; $more = 0;
        the_content('');
      ?>
		</div>
	</div>
</div>

<div class="row row-services no-border">
	<div class="inner-wrapper">
    <a href="#" class="box plan">
      <h3>PLAN</h3>
      <ul class="no-bullets">
        <li>AUDIT</li>
        <li>DISCOVERY</li>
        <li>REQUIREMENTS GATHERING</li>
      </ul>
    </a>

    <a href="#" class="box design-implement">
      <h3>DESIGN &amp; IMPLEMENT</h3>
      <ul class="no-bullets">
        <li>CONFIGURE/BUILD INSTALL</li>
        <li>DEPLOY/ROLL-OUT</li>
        <li>INTEGRATE</li>
      </ul>
    </a>

    <a href="#" class="box manage">
      <h3>MANAGE</h3>
      <ul class="no-bullets">
        <li>PEFORMANCE MONITORING &amp; REPORTING</li>
        <li>PERFORMANCE MANAGEMENT</li>
        <li>OUTSOURCING</li>
      </ul>
    </a>

    <a href="#" class="box support">
      <h3>SUPPORT</h3>
      <ul class="no-bullets">
        <li>MAINTENACE &amp; REPAIR</li>
        <li>BREAK FIX</li>
      </ul>
    </a>

    <a href="#" class="box optimise">
      <h3>OPTIMISE</h3>
      <ul class="no-bullets">
        <li>LEVERAGING INFRASTRUCTURE</li>
        <li>THROUGH TECHNOLOGY</li>
        <li>ADVANCEMENTS</li>
        <li>ETHICAL</li>
      </ul>
    </a>
  </div>
</div>

<div class="row no-border">
  <div class="inner-wrapper">
    <div class="eight-col prepend-two">
			<?php
        $more = 1;
        the_content('', true);
      ?>
		</div>
  </div>
</div>

<?php endwhile; else : ?>
	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Page not found: 404</h1>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
