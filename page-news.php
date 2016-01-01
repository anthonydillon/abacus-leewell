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


	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>News centre</h1>
			</div>
		</div>
	</div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row border">
		<div class="inner-wrapper">
				<ul class="news-grid no-bullets">
					<?php
						$args = array( 'category' => 1 );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
					<li class="news-grid__item four-col">
						<a href="<?php the_permalink(); ?>" class="news-grid__link">
							<h2 class="news-grid__title"><?php the_title(); ?></h2>
							<p class="news-grid__excerpt"><?php the_excerpt(); ?></p>
						</a>
					</li>
					<?php endforeach;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
