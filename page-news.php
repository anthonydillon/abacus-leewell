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

<div class="row clouds-top"></div>
<?php $count = 0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
	<div class="row border">
		<div class="inner-wrapper">
				<ul class="news-grid no-bullets">
					<li class="news-grid__item four-col<?php if ($count % 3 == 0) { echo ' last-col'; }?>">
						<a href="<?php the_permalink(); ?>" class="news-grid__link">
							<p><?php echo '|'+$count+'|';?></p>
							<h2 class="news-grid__title"><?php the_title(); ?></h2>
							<p class="news-grid__excerpt"><?php the_excerpt(); ?></p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
