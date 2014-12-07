<?php
include 'lib/header.php';
?>
  <!-- Slider --><!-- 
  <section id="maincontent">
    <div class="container container_12">
      <div class="grid_12" style="height:150px; background:#CCC;"></div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- POST GRID 
  </section> -->
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
  var latLng = new google.maps.LatLng(17.444862, 78.448700);
  var map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 13,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: false
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

  <div class="clearfix"></div>
  <div class="devide"></div>
  <!-- Content/Teaser -->
  <section id="maincontent"> 
    <!-- BREADCRUMBS -->
    <div class="container_12">
      <div class="grid_6 text-right">
        <div id="Date" class="mobile-hide"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    
    <!-- CONTENT/ARTIKEL -->
    <div class="container_12">
      <div class="textdev grid_12">
        <h1>Contact Us</h1>
        <div></div>        
      </div>
      <div class="clearfix"></div>
      <div class="grid_12">
      <section class="grid_6">

          <form id="contact_form">

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-user"></i> Full Name</label>
              <div class="controls controls-row">
                <input type="text" placeholder="Cool Person" id="inputEmail" name="name" class="input-xxlarge">
              </div>
            </div>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-envelope"></i> Email</label>
              <div class="controls">
                <input type="text" placeholder="you@yourdomain.com" id="inputEmail" name="email" class="input-xxlarge">
              </div>
            </div>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-question-sign"></i> Subject</label>
              <div class="controls">
                <input type="text" placeholder="what's up?" id="inputSubject" name="subject" class="input-xxlarge">
              </div>
            </div>
            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-phone"></i> Mobile</label>
              <div class="controls">
                <input type="text" placeholder="Mobile" id="inputSubject" name="mobile" class="input-xxlarge">
              </div>
            </div>   
            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-pencil"></i> Message</label>
              <div class="controls">
                <textarea placeholder="What's on your mind?" class="input-xxlarge" name="message" rows="6"></textarea>
              </div> 
            </div>
            
            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-envelope-alt"></i> Recipient</label>
              <div class="controls">
              <select class="form-control" name="recipient">
  						<option value="Student Center">Student Center</option>
  						<option value="Technical Head">Technical Head</option>
  						<option value="Corporate">Corporate Support</option>
              <option value="College Support">College Support</option>
  						<option value="Public Relations">Public Relations</option>
  						<option value="General Support">General Support</option>
					</select>                
              </div>
            </div>
            
            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-exclamation-sign"></i> Priority</label>
              <div class="controls">
              <label style="margin:0px; padding:0 10px 0 0;">Low<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value="low"></span></label>
              <label style="margin:0px; padding:0 10px 0 0;">Medium<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value="medium"></span></label>
              <label style="margin:0px; padding:0 10px 0 0;">High<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value="high"></span></label>
              </div>
            </div>
           <div id="error" style="color:red"></div>
            <div class="control-group" style="padding:10px 0 0 0;">
    <div class="controls"><input type="button" id="submit_btn" value="Send Message" class="btn btn-success"/>
          </div>

          
          <br class="clear">


                
        </div></form></section>
        <div class="well grid_6">
             <div id="map_canvas" style="width:100%; height:500px"></div>
          </div>     
</div>
      <div class="clearfix"></div>
    </div>
  </section>
  <?php
include 'lib/footer.php';
?>

<script type="text/javascript">

  $("#submit_btn").click(function(){ ///alert('kjlsgjdfgj');

      var str = $("#contact_form").serialize();

      $.post("save_contact.php",

        str, 

        function(data){

          if(data == 'success'){

            $("#error").text("Thank you for sharing your details, we will get back to you.");

          } 

          else{

            $("#error").text(data);

          }

        });

  });

</script>