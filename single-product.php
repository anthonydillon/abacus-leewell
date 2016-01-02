<?php

/**
 * Page Template
 *
 *
 * @file           page-product.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Products */

get_header(); ?>

<?php if (have_posts()) : ?>

<div class="row no-border">
	<div class="inner-wrapper">
		<div class="twelve-col">
			<?php woocommerce_content(); ?>
		</div>
	</div>
</div>

<?php else : ?>
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
