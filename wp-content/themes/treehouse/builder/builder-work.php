<!-- 
	/**
	*
	* Work Section
	*
	*/
-->

<section id="work">
	<div class="select-type iso-filters">
		<button class="large" data-filter=".video">Moving</button>
		<button class="large" data-filter=".photo">Still</button>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<ul class="no-bullet categories iso-filters">
				<li><button class="dark ghost" data-filter="*">All</button></li>
				<li><button class="dark ghost" data-filter=".commercial">Commercial</button></li>
				<li><button class="dark ghost" data-filter=".fashion">Fashion</button></li>
				<li><button class="dark ghost" data-filter=".music">Music</button></li>
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
		<?php $projects = get_posts(array('post_type' => 'portfolio-item')); ?>

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
				<a class="fancybox" href="<?php echo $first_image ?>" data-title="<?php echo $project->post_content ?>" rel="fancy-<?php echo $project->ID ?>" title="<?php the_field('description', $project->ID) ?>">
					<img src="<?php the_field('thumbnail', $project->ID) ?>" alt="<?php echo $project->post_title ?>"/>
					<span class="info">
						<h4><?php the_field('title', $project->ID) ?></h4>
						<p><?php the_field('subtitle', $project->ID) ?></p>
					</span>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<div class="clearfix"></div>
		<div class="hide">
			<?php 
				foreach($projects as $project) : 
					$images = get_fields($project->ID);
					if(!empty($images['images'])) : 
						foreach($images['images'] as $i) :
			?>
				<a class="fancybox" rel="fancy-<?php echo $project->ID ?>" href="<?php echo $i['gallery_image']['sizes']['hero-image'] ?>"title="<?php the_field('description', $project->ID) ?>">fancybox image</a>
			<?php  endforeach; endif; endforeach; ?>
		</div>
	</div>
</section>