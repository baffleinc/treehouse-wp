<!-- 
	/**
	*
	* text-over-image
	*
	*/
-->

<?php $images = get_sub_field('background_image') ?>

<section class="text-over-image" id="text-image" style="background-image: url(<?php echo $images['sizes']['hero-image'] ?>)">
	<div class="row">
		<div class="small-12 medium-10 medium-offset-1 columns">
			<h2><?php the_sub_field('title') ?></h2>
			<?php the_sub_field('text') ?>
		</div>
	</div>
</section>