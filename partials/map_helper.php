<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXdo1pSufFydCToPxjbsSPwJPsUWGkXpY&map_ids=41306f47da0210db&callback=initMap"></script>

<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 * Renders a Google Map onto the selected jQuery element
 * @date    22/10/19
 * @since   5.8.6
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
	
	
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom : $el.data('zoom') || 16,
		//mapId : '41306f47da0210db',
		//mapTypeID : '41306f47da0210db',
         mapTypeId : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );
	
	

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 * Creates a marker for the given jQuery element and map.
 * @date    22/10/19
 * @since   5.8.6
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map,
		icon: 'https://glomotax.com/wp-content/uploads/2021/03/pin-solid-gradient_30x40.png'
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 * Centers the map showing all markers in view.
 * @date    22/10/19
 * @since   5.8.6
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
		map.setCenter({lat:33, lng:-15.7}); // I've manually set center as Iceland
		map.setZoom(1.9); // I've manually set the zoom
		//  map.setCenter(bounds.getCenter() ); // default setting when not manually using lat/long
		 // map.fitBounds( bounds ); // default setting from ACF
    }
    
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>