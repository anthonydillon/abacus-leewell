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
 /* Template Name: Page */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php $hero_id = get_post_meta($post->ID, 'hero_image', $single = true); ?>
	<div class="row row-hero strip-dark no-border"
  <?php
    if ($hero_id) {
      echo 'style="background-image: url('.wp_get_attachment_url($hero_id).');"';
    }
  ?>
  >
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
			<?php the_content(); ?>
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
