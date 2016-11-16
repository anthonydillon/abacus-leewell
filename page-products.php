<?php

/**
 * Page Template
 *
 *
 * @file           page-products.php
 * @package        Abacus Leewell
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Products */

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
			<?php the_content(); ?>
		</div>
	</div>
</div>

<div class="row no-border strip-grey">
	<div>
			<h2 class="muted-heading">Our leading partners are:</h2>
			<ul class="inline-logos clear">
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-avg.png" alt="AVG" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-brother.png" alt="Brother" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-cherry.png" alt="Cherry" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-cisco.png" alt="Cisco" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-cisco-meraki.png" alt="Cisco Meraki" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-fijitsu.png" alt="Fijitsu" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-hp.png" alt="HP" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-kaspersky.png" alt="Kaspersky" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-microsoft.png" alt="Microsoft" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-oki.png" alt="OKI" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-terra.png" alt="Terra" class="inline-logos__image" /></li>
				<li class="inline-logos__item"><img src="<?php bloginfo('template_directory'); ?>/img/logo-utax.png" alt="UTAX" class="inline-logos__image" /></li>
			</ul>
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
