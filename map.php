 <style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
 var lat1= [
    latLng.lat()
     ].join(', ');
  document.getElementById('info').value=lat1;
  document.getElementById('info1').value = [
     latLng.lng()
  ].join(', ');
}

function updateMarkerAddress(str) {
  document.getElementById('address').value = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(17.535035116213958, 78.233111328125);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="form-group">
	<label class="control-label col-md-3">Map Search Location</label>
	<div class="col-md-4">
		<div class="input-icon right">
			<i class="fa"></i>
			<div id="mapCanvas" style="height:150px;border:1px solid #ccc;"></div>
		</div>
	</div>
</div>
<div id="markerStatus" style="margin-left: 271px;"><i>Click and drag the marker.</i></div>       
 <div class="form-group">
	<label class="control-label col-md-3">Latitude</label>
	<div class="col-md-4">
		<div class="input-icon right">
			<i class="fa"></i>
			<input id="info" type="text" class="form-control" name="latitude" value="" />
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Longitude</label>
	<div class="col-md-4">
		<div class="input-icon right">
			<i class="fa"></i>
			<input id="info1" type="text" class="form-control" name="longitude" value="" />
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Address</label>
	<div class="col-md-4">
		<div class="input-icon right">
			<i class="fa"></i>
			<input id="address" type="text" class="form-control" name="kkk"/>
		</div>
	</div>
</div>    