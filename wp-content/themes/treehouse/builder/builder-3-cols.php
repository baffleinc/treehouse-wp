<!-- 
	/**
	*
	* 3 Cols Layout
	*
	*/
-->

<section class="columns-3" id="process">
	<div class="row">

		<h2 class="text-center">Our Process</h2>

		<?php if(have_rows('columns')) : while(have_rows('columns')) : the_row(); ?>

			<div class="small-12 medium-4 columns text-center" fade-into-view>
				<h3><?php the_sub_field('title') ?></h3>
				<img src="<?php the_sub_field('icon') ?>" alt="">
				<p><?php the_sub_field('subtitle') ?></p>
			</div>

		<?php endwhile; endif; ?>
		
	</div>
</section>