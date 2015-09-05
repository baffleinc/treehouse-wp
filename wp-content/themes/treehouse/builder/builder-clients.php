<!-- 
	/**
	*
	* Clients
	*
	*/
-->

<?php $images = get_sub_field('background_image') ?>

<div id="trigger-clients"></div>
<section class="clients" id="clients" style="background-image: url(<?php echo $images['sizes']['hero-image'] ?>)">
	<div class="white-arrow"></div>
	<div class="row">
		<h1><?php the_sub_field('title') ?></h1>
		<?php if(have_rows('client_images')) : ?>
			<div class="client-list">
				<?php while(have_rows('client_images')) : the_row() ?>
					<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="notch"></div>
</section>
