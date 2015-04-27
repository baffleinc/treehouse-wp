<?php

/* Template Name: About & Contact */

get_header();

?>

<div class="about" ng-class="{ contact : showContact }">
	<div class="about-container">
		<button ng-click="showContact = !showContact">Contact</button>
		<div class="row">
			<div class="small-12 columns">
				<h2 class="text-center page-title">About Treehouse</h2>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 medium-push-6 columns serif">
				<p>We make a whole bunch of shit, talk to us we’ll tell youwhat you want to hear but won’t deliver. eata dick. All I want is your money</p>

				<div class="row">
					<div class="small-12 columns">
						<p><strong>Our clients include</strong></p>
					</div>
					<div class="small-6 medium-3 columns">
						<ul class="no-bullet">
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
						</ul>
					</div>
					<div class="small-6 medium-3 columns">
						<ul class="no-bullet">
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
						</ul>
					</div>
					<div class="small-6 medium-3 columns">
						<ul class="no-bullet">
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
						</ul>
					</div>
					<div class="small-6 medium-3 columns">
						<ul class="no-bullet">
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
							<li>Nike</li>
							<li>Pooman</li>
							<li>Weeman</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="small-12 medium-6 medium-pull-6 columns contact">
				<ul class="no-bullet">
					<li>TREEHOUSE STUDIOS</li>
					<li>FILMMAKERS &amp; PHOTOGRAPHERS</li>
					<li><a href="mailto:hello@treehousestudios.com.au">HELLO@TREEHOUSESTUDIOS.COM.AU</a></li>
					<li><a href="https://instagram.com/treehouseproductions/">INSTAGRAM</a></li>
					<li><a href="">FACEBOOK</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="contact-container">
		<button ng-click="showContact = !showContact">About</button>
		<div class="row">
			<div class="small-12 columns">
				<h2 class="text-center page-title">Say Hi</h2>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 medium-push-6 columns serif">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
			</div>
			<div class="small-12 medium-6 medium-pull-6 columns contact">
				<ul class="no-bullet">
					<li>TREEHOUSE STUDIOS</li>
					<li>FILMMAKERS &amp; PHOTOGRAPHERS</li>
					<li><a href="mailto:hello@treehousestudios.com.au">HELLO@TREEHOUSESTUDIOS.COM.AU</a></li>
					<li><a href="https://instagram.com/treehouseproductions/">INSTAGRAM</a></li>
					<li><a href="">FACEBOOK</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<?php get_footer() ?>