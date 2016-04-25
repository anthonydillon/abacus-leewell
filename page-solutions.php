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
 /* Template Name: Solutions */

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

<div class="row no-border no-padding-bottom">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php the_field('section_1', false, false); ?>
		</div>
	</div>
</div>

<div class="row row-solution-hovers">
	<div class="inner-wrapper">
		<ul class="downdown-container">
			<li class="dropdown">
				<a href="<?php echo site_url(); ?>/solutions/managed-print-services/">Managed Print Services
					<ul>
						<li>Consolidated supply</li>
						<li>Waste reduction</li>
						<li>High quality devices</li>
					</ul>
				</a>
			</li>
			<li class="dropdown">Mobility
				<ul>
					<li>BYOD</li>
					<li>Software</li>
					<li>Mobile Security</li>
				</ul>
			</li>
			<li class="dropdown">Workspace
				<ul>
					<li>Networking</li>
					<li>Security &ndash; endpoint &amp; network</li>
					<li>Refresh</li>
					<li>Printing</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="<?php echo site_url(); ?>/solutions/cloud/">Cloud
					<ul>
						<li>Productivity Tools</li>
						<li>Back up as a Service</li>
						<li>Software as a Service</li>
						<li>Managed</li>
						<li>Cloud managed networking</li>
					</ul>
				</a>
			</li>
			<li class="dropdown">
				<a href="<?php echo site_url(); ?>/solutions/networking/">Networking
					<ul>
						<li>Wireless/Wired</li>
						<li>LAN/WAN</li>
						<li>Cabling</li>
						<li>IP Telephony</li>
						<li>Security</li>
						<li>Cloud managed</li>
					</ul>
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php the_field('section_2', false, false); ?>
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
