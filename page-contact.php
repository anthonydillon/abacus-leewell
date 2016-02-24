<?php

/**
 * Page Template
 *
 *
 * @file           page-contact.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Contact */

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
		<div class="prepend-two four-col">
			<?php the_content(); ?>
		</div>
		<div class="six-col last-col">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39255.06261298868!2d-0.30174293044469325!3d52.053485752195364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877cc8e3ad269cd%3A0xf56bb78da1a43c77!2s30B+High+St%2C+Langford%2C+Biggleswade%2C+Central+Bedfordshire+SG18+9RR%2C+UK!5e0!3m2!1sen!2sus!4v1455836373833" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
