<?php

/**
 * News Template
 *
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: News */

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

<div class="row clouds-top"></div>

	<div class="row border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two">
        <p><?php the_content(); ?></p>
      </div>
		</div>
	</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
