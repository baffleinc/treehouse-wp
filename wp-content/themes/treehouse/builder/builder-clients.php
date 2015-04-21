<!-- 
	/**
	*
	* Clients
	*
	*/
-->

<?php $images = get_sub_field('background_image') ?>

<section class="clients" style="background-image: url(<?php echo $images['sizes']['hero-image'] ?>)">
	<div class="row">
		<h2><?php the_sub_field('title') ?></h2>
		<?php if(have_rows('client_images')) : ?>
			<ul class="inline-list">
				<?php while(have_rows('client_images')) : the_row() ?>
					<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
