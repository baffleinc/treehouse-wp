<?php get_header() ?>

	<!-- 
		/**
		*
		* Hero Section
		*
		*/
	-->

	<?php
		$options = get_fields('option');
	?>

	<section class="hero" style="background-image: url(<?php echo $options['hero_video_fallback_image']['sizes']['hero-image'] ?>)">

		<div class="content">
			<?php include('lib/logo-partial.html') ?>
			<a href="#showreel" class="button ghost">Showreel</a>
		</div>

		<ul class="social inline-list">
			<li><a href="<?php the_field('facebook_url', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a href="<?php the_field('instagram_url', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
			<li><a href="<?php the_field('twitter_url', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a href="<?php the_field('vimeo_url', 'option'); ?>"><i class="fa fa-vimeo-square"></i></a></li>
			<li><a href="<?php the_field('email_url', 'option'); ?>"><i class="fa fa-envelope"></i></a></li>
		</ul>

	</section>

	


	<?php get_template_part( 'builder/builder', 'master' ) ?>










<?php get_footer() ?>