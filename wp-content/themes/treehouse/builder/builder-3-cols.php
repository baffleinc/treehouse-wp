<!-- 
	/**
	*
	* 3 Cols Layout
	*
	*/
-->

<section class="columns-3" id="process">
	<div class="row">

		
		<h1 class="text-center"><?php the_sub_field('3-col-title') ?></h1>
		<?php if(have_rows('columns')) : while(have_rows('columns')) : the_row(); ?>
			
			<div class="small-12 medium-4 columns text-center" fade-into-view>
				<img class="icon" src="<?php the_sub_field('icon') ?>" alt="">
				<h2><?php the_sub_field('title') ?></h2>
				<p><?php the_sub_field('subtitle') ?></p>
			</div>

		<?php endwhile; endif; ?>
		
	</div>
</section>