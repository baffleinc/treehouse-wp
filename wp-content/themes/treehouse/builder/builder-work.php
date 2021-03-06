<!-- 
	/**
	*
	* Work Section
	*
	*/
-->

<?php 

	$cats = get_terms(array('portfolio-category'), array('exclude' => array(4, 3)));

?>

<section id="work">
	<div class="select-type iso-filters" data-filter-group="type">
		<!-- <button class="large active reset" data-filter="*">Everything</button> -->
		<button class="large" data-filter=".video">Moving</button>
		<button class="large" data-filter=".photo">Still</button>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<ul class="no-bullet categories iso-filters" data-filter-group="industry">
				<li><button class="small dark ghost" data-filter="*">All</button></li>
				<?php foreach($cats as $c) : ?>
				<li><button class="small dark ghost" data-filter=".<?php echo $c->slug ?>"><?php echo $c->name ?></button></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="row thumbs">
		<!-- <preview-grid items="work"></preview-grid> -->
		<!-- <div ng-repeat="item in work" class="small-6 medium-3 columns item end">
			<div>
				<a ng-href="{{item.link}}">
					
				</a>
				<img ng-src="{{ item.acf.thumbnail.url }}" alt="">
			</div>
				
		</div> -->
		<?php $projects = get_posts(array('post_type' => 'portfolio-item', 'showposts' => 999)); ?>

		<ul id="og-grid" class="og-grid">
		<?php 
			foreach($projects as $project) : 
			$class_string = '';
			$terms = wp_get_post_terms($project->ID, 'portfolio-category');
			foreach($terms as $t) $class_string.= $t->slug.' ';
			$images = get_fields($project->ID);
			$first_image = '';
			if(!empty($images['images'])) $first_image = $images['images'][0]['gallery_image']['sizes']['hero-image'];
		?>
			<li class="iso-item <?php echo $class_string ?>">
					<img src="<?php the_field('thumbnail', $project->ID) ?>" alt="<?php echo $project->post_title ?>"/>
				<?php if(get_field('video', $project->ID)) : ?>
					<a class="fancybox video" href="<?php the_field('video', $project->ID) ?>" data-title="<?php echo $project->post_content ?>" rel="fancy-<?php echo $project->ID ?>" title="<?php the_field('description', $project->ID) ?>">
				<?php else : ?>
					<a class="fancybox gallery" href="<?php echo $first_image ?>" data-title="<?php echo $project->post_content ?>" rel="fancy-<?php echo $project->ID ?>" title="<?php the_field('description', $project->ID) ?>">
				<?php endif; ?>
					<div class="table">
						<div class="cell">
							<h4><?php the_field('title', $project->ID) ?></h4>
							<p><?php the_field('subtitle', $project->ID) ?></p>
						</div>
					</div>
						
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<div class="clearfix"></div>
		<div>
			<?php 
				foreach($projects as $project) : 
					$images = get_fields($project->ID);
					if(!empty($images['images'])) : 
						$n = 0;
						foreach($images['images'] as $i) :
							if($n >= 1) :
			?>
				<a class="fancybox gallery hide" rel="fancy-<?php echo $project->ID ?>" href="<?php echo $i['gallery_image']['sizes']['hero-image'] ?>"title="<?php the_field('description', $project->ID) ?>">fancybox image</a>
			<?php endif; $n++; endforeach; endif; endforeach; ?>
		</div>
	</div>
</section>