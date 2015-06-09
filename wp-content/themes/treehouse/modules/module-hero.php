<?php $img = get_field('hero_video_fallback_image', 'option') ?>

<video autoplay loop poster="<?php the_field('hero_video_fallback_image', 'options') ?>" id="bgvid">
	<source src="<?php the_field('hero_webm', 'options') ?>" type="video/webm">
	<source src="<?php the_field('hero_mp4', 'options') ?>" type="video/mp4">
</video>

<section class="hero" id="hero">
	
	<div class="content" id="animate">
		<?php get_template_part('modules/module', 'logo') ?>
		<a href="<?php the_field('showreel_url', 'option') ?>" class="fancybox video button ghost">Showreel</a>
	</div>

	<?php get_template_part( 'modules/module', 'social' ) ?>

</section>


<style>
	@media screen and (min-width: 0rem) and (max-width: 64rem){
		#hero{ background-image: url(<?php the_field('hero_video_fallback_image', 'options') ?>) }
	}
</style>