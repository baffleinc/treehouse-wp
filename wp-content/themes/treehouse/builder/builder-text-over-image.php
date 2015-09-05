<!-- 
	/**
	*
	* text-over-image
	*
	*/
-->

<?php $images = get_sub_field('background_image') ?>

<div id="trigger-about"></div>
<section class="text-over-image" id="about" style="background-image: url(<?php echo $images['sizes']['hero-image'] ?>)">
	<div class="white-arrow"></div>
	<div class="row">
		<div class="small-12 medium-10 medium-offset-1 columns">
			<h1><?php the_sub_field('title') ?></h1>
			<?php the_sub_field('text') ?>
		</div>
	</div>
	<div class="notch"></div>
</section>