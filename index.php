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

	<div class="row border">
		<div class="inner-wrapper">
			<div class="seven-col append-one">
				<h2>Latest news</h2>
				<ul class="list no-bullets">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<p><?php the_time( get_option( 'date_format' ) ); ?></p>
					</li>
				<?php endwhile; endif; ?>
				</ul>
			</div>
      <div class="four-col last-col">
				<h3>Latest from twitter</h3>
        <a class="twitter-timeline" href="https://twitter.com/AbacusLeewell" data-widget-id="728542718939549696">Tweets by @AbacusLeewell</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
		</div>
	</div>



<?php get_footer(); ?>
