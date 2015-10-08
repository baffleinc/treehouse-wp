<?php

/* Template Name: About & Contact */

get_header();

?>

<style>
	body{ background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>); }
</style>

<button class="hide-for-small-only switch-screen show-contact" ng-hide="showContact" ng-click="showContact = !showContact">Contact</button>
<button class="hide-for-small-only switch-screen show-about" ng-show="showContact" ng-click="showContact = !showContact">About</button>

<div class="about" ng-class="{ contact : showContact }">

	

	<div class="about-container row">
		<div class="row">
			<div class="small-12 columns">
				<h2 class="text-center page-title">About Treehouse</h2>
			</div>
		</div>
		<div class="row flex-center">
			<div class="small-12 medium-6 medium-push-6 columns serif">
				

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php the_content() ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="small-12 medium-6 medium-pull-6 columns contact">
				<ul class="no-bullet">
					<li>TREEHOUSE STUDIOS</li>
					<li>FILMMAKERS &amp; PHOTOGRAPHERS</li>
					<li><a href="mailto:hello@treehousestudios.com.au">HELLO@TREEHOUSESTUDIOS.COM.AU</a></li>
					<li><a href="https://instagram.com/treehouseproductions/">INSTAGRAM</a></li>
					<li><a href="">FACEBOOK</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="contact-container row">
		
		<div class="row">
			<div class="small-12 columns">
				<h2 class="text-center page-title">Say Hi</h2>
			</div>
		</div>
		<div class="row flex-center">
			<div class="small-12 medium-6 medium-push-6 columns serif">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
			</div>
			<div class="hide-for-small-only small-12 medium-6 medium-pull-6 columns contact">
				<ul class="no-bullet">
					<li>TREEHOUSE STUDIOS</li>
					<li>FILMMAKERS &amp; PHOTOGRAPHERS</li>
					<li><a href="mailto:hello@treehousestudios.com.au">HELLO@TREEHOUSESTUDIOS.COM.AU</a></li>
					<li><a href="https://instagram.com/treehouseproductions/">INSTAGRAM</a></li>
					<li><a href="">FACEBOOK</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<?php get_footer() ?>