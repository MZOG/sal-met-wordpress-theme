const wrapperMenu = document.querySelector( '.wrapper-menu' );
const navigation = document.querySelector( '.navigation' );

wrapperMenu.addEventListener( 'click', function() {
	wrapperMenu.classList.toggle( 'open' );
	navigation.classList.toggle( 'open' );
} );

// // Google Map helper
// ( function( $ ) {
// 	function initMap( $el ) {
// 		const $markers = $el.find( '.marker' );
// 		const mapArgs = {
// 			zoom: $el.data( 'zoom' ) || 16,
// 			mapTypeId: google.maps.MapTypeId.ROADMAP,
// 		};
// 		const map = new google.maps.Map( $el[0], mapArgs );

// 		// Add markers.
// 		map.markers = [];
// 		$markers.each( function() {
// 			initMarker( $( this ), map );
// 		} );

// 		// Center map based on markers.
// 		centerMap( map );

// 		// Return map instance.
// 		return map;
// 	}

// 	function initMarker( $marker, map ) {
// 		// Get position from marker.
// 		const lat = $marker.data( 'lat' );
// 		const lng = $marker.data( 'lng' );
// 		const latLng = {
// 			lat: parseFloat( lat ),
// 			lng: parseFloat( lng ),
// 		};

// 		// Create marker instance.
// 		const marker = new google.maps.Marker( {
// 			position: latLng,
// 			map: map,
// 		} );

// 		// Append to reference for later use.
// 		map.markers.push( marker );

// 		// If marker contains HTML, add it to an infoWindow.
// 		if ( $marker.html() ) {
// 			// Create info window.
// 			const infowindow = new google.maps.InfoWindow({
// 				content: $marker.html(),
// 			} );

// 			// Show info window when marker is clicked.
// 			google.maps.event.addListener( marker, 'click', function() {
// 				infowindow.open( map, marker );
// 			} );
// 		}
// 	}

// 	function centerMap( map ) {
// 		// Create map boundaries from all map markers.
// 		const bounds = new google.maps.LatLngBounds();
// 		map.markers.forEach( function( marker ) {
// 			bounds.extend( {
// 				lat: marker.position.lat(),
// 				lng: marker.position.lng(),
// 			} );
// 		} );

// 		// Case: Single marker.
// 		if ( map.markers.length === 1 ) {
// 			map.setCenter( bounds.getCenter() );
// 		} else {
// 			map.fitBounds( bounds );
// 		}
// 	}

// 	$( document ).ready( function() {
// 		$( '.acf-map' ).each( function() {
// 			const map = initMap( $( this ) );
// 		} );
// 	} );
// }( jQuery ) );
