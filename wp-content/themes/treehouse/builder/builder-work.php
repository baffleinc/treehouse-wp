<!-- 
	/**
	*
	* Work Section
	*
	*/
-->

<section id="work">
	<div class="select-type">
		<button class="large">Moving</button>
		<button class="large">Still</button>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<ul class="no-bullet categories">
				<li><button class="dark ghost">All</button></li>
				<li><button class="dark ghost">Commercial</button></li>
				<li><button class="dark ghost">Fashion</button></li>
				<li><button class="dark ghost">Music</button></li>
			</ul>
		</div>
	</div>
	<div class="row thumbs">
		<div ng-repeat="item in work" class="small-6 medium-3 columns item end">
			<div>
				<a ng-href="{{item.link}}">
					<h4>{{item.acf.title}}</h4>
					<p>{{item.acf.subtitle}}</p>
				</a>
				<img ng-src="{{ item.acf.thumbnail.url }}" alt="">
			</div>
				
		</div>
	</div>
</section>