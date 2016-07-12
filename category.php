<?php

/**
 * Products Template
 *
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: News */

get_header(); ?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Products</h1>
			</div>
		</div>
	</div>
</div>

<div class="row clouds-top"></div>

	<div class="row border">
		<div class="inner-wrapper">
			<div class="twelve-col">
				<ul class="list no-bullets">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</li>
				<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
