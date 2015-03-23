		var map;
			jQuery(function($) {
				$(document).ready(function() {
					var latlng = new google.maps.LatLng(57.0442, 9.9116);
					var myOptions = {
						zoom: 10,
						center: latlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
					console.dir(map);
					var contentString = '<div id="content-map">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading">Properti1001.com</h1>'+
					'<div id="bodyContent">'+
					'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('assets/img/maps/logo.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('assets/img/maps/logo_shadow.png',
					new google.maps.Size(130,50),
					new google.maps.Point(0,0),
					new google.maps.Point(65, 50));

				var companyPos = new google.maps.LatLng(57.0442, 9.9116);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					shadow: companyShadow,
					title:"Lokasi properti1001.com",
					zIndex: 3});
					
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
					google.maps.event.trigger(map, 'resize');

					$('a[href="#pane3"]').on('shown', function(e) {
						google.maps.event.trigger(map, 'resize');
					});
					
					$('#myTab a[href="#pane3"]').on('shown', function(){
						google.maps.event.trigger(map, 'resize');
						map.setCenter(latlng);
					});
				});
			});