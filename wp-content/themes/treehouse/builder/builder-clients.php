<!-- 
	/**
	*
	* Clients
	*
	*/
-->

<?php $images = get_sub_field('background_image') ?>

<section class="clients" id="clients" style="background-image: url(<?php echo $images['sizes']['hero-image'] ?>)">
	<div class="row">
		<h2><?php the_sub_field('title') ?></h2>
		<?php if(have_rows('client_images')) : ?>
			<div class="client-list">
				<?php while(have_rows('client_images')) : the_row() ?>
					<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
