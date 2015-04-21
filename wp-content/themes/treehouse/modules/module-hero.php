<?php $img = get_field('hero_video_fallback_image', 'option') ?>

<section class="hero" style="background-image: url(<?php echo $img['sizes']['hero-image'] ?>)">

	<div class="content">
		<?php get_template_part('modules/module', 'logo') ?>
		<a href="#showreel" class="button ghost">Showreel</a>
	</div>

	<?php get_template_part( 'modules/module', 'social' ) ?>

</section>