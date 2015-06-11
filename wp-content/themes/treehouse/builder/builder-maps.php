<!-- 
	/**
	*
	* MAP
	*
	*/
-->

<section class="map" id="map">
	<ui-gmap-google-map center='map.center' zoom='map.zoom' events="map.events">
		<ui-gmap-marker idKey="melbourne-office" coords='coords.melbourne'></ui-gmap-marker>
		<ui-gmap-marker idKey="sydney-office" coords='coords.sydney'></ui-gmap-marker>
	</ui-gmap-google-map>
</section>