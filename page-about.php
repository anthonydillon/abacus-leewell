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
 /* Template Name: About */

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

<div class="row row-image"></div>

<div class="row strip-blue">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php the_field('section_2', false, false); ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php the_field('section_3', false, false); ?>
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
