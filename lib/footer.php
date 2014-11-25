<!-- COPYRIGHT -->
<script>
  $(document).ready(function(){
    $('.form-horizontal').submit(function(event){
        event.preventDefault();
    });
    $('.nav-tabs active').click();
    $('.form-horizontal button').click(function(){
      var str = $(this).closest('form').serialize();
      if($(this).text()=='Sign Up'){
        $.post('user_signup.php',str,function(data){
          if(data.status != 1){
            alert(data.error);
          }
          else{
            alert(data.data);
            window.location.reload();
          }
        });
      }
      else{
        $.post('user_login.php',str,function(data){
          if(data.status != 1){
            alert(data.error);
          }
          else{
            window.location.reload();
          }
        }); 
      }
    });
  });
</script>
<div class="copyright container container_12">
  <div class="grid_3">
    <div class="footer-box">
      <h3>Quick Link</h3>
      <ul>
        <li><a href="vision-mission.php">Vision & Mission</a></li>
        <li><a href="clients.php">Client</a></li>
        <li><a href="learning-center.php" target="_blank">Services</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div class="grid_3">
    <div class="footer-box">
      <h3>Services</h3>
      <ul>
        <li><a href="learning-center.php" target="_blank">Learning Center</a></li>
        <li><a href="recruitment.php">Recruitment</a></li>
        <li><a href="training-mentoring.php">Training & Mentoring</a></li>
        <li><a href="workshops.php">Workshops</a></li>
      </ul>
    </div>
  </div>
  <div class="grid_3">
    <div class="footer-box">
      <h3>Sign in with</h3>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Google+</a></li>
        <li><a href="#">Youtube</a></li>
      </ul>
    </div>
  </div>
  <div class="grid_3">
    <div class="footer-box">
      <h3>Login</h3>
      <ul>
        <li><a href="#" data-toggle="modal" data-target="#myModalsignup">Signup</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModallogin">Login</a></li>
      </ul>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="devide"></div>
  <div class="clearfix"></div>
  <div class="container_12">
    <div class="grid_6"> Copyright &copy; 2014 Campus Wave. All rights reserved </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</footer>
<div class="clearfix"></div>
</div>
<!--lightbox signup start-->
<div id="myModalsignup" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<br>
<div class="bs-example bs-example-tabs">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a data-toggle="tab" href="#sschool">Student</a></li>
    <li class=""><a data-toggle="tab" href="#scollege">College</a></li>
    <li class=""><a data-toggle="tab" href="#scorporate">Corporate</a></li>
  </ul>
</div>
<div class="modal-body" style="height:330px;">
<div class="tab-content" id="myTabContent">
<div id="scorporate" class="tab-pane fade">
<div class="col-md-6">
  <form class="form-horizontal">
    <input type="hidden" name="type" value="3" />
    <fieldset>
      <!-- Sign In Form --> 
      <!-- Text input-->
      <div class="control-group">
        <label for="userid" class="control-label">Email</label>
        <div class="controls">
          <input type="text" placeholder="email" class="form-control" name="email" id="email" required="">
        </div>
      </div>
      <!-- Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Password:</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
        </div>
      </div>
      <!-- Repeat Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Re-Enter</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="re_password" id="re_password" required="">
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label for="signin" class="control-label"></label>
        <div class="controls">
          <button class="btn btn-success" name="signin" id="signin">Sign Up</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-md-6">
  <ul>
  <li>
    <button class="btn btn-success" style="width:200px; margin:91px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
  </li>
  <li>
    <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
  </li>
</div>
</div>
<div id="scollege" class="tab-pane fade active in">
<div class="col-md-6">
  <form class="form-horizontal cs2">
    <input type="hidden" name="type" value="2" />
    <fieldset>
      <!-- Sign In Form --> 
      <!-- Text input-->
      <div class="control-group">
        <label for="email" class="control-label">Email</label>
        <div class="controls">
          <input type="text" placeholder="email id" class="form-control" name="email" id="email" required="">
        </div>
      </div>
      <!-- Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Password:</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
        </div>
      </div>
      <!-- Repeat Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Re-Enter</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="re_password" id="re_password" required="">
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label for="signin" class="control-label"></label>
        <div class="controls">
          <button class="btn btn-success" name="signin" id="signin">Sign Up</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-md-6">
<ul>
<li>
  <button class="btn btn-success" style="width:200px; margin:91px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
</li>
<li>
  <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
</li>
</div>
</div>
<div id="sschool" class="tab-pane fade">
<div class="col-md-6">
  <form class="form-horizontal cs3">
    <input type="hidden" name="type" value="1" />
    <fieldset>
      <!-- Sign In Form --> 
      <!-- Text input-->
      <div class="control-group">
        <label for="email" class="control-label">Email</label>
        <div class="controls">
          <input type="text" placeholder="email id" class="form-control" name="email" id="email" required="">
        </div>
      </div>
      <!-- Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Password:</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
        </div>
      </div>
      <!-- Repeat Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Re-Enter</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="re_password" id="re_password" required="">
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label for="signin" class="control-label"></label>
        <div class="controls">
          <button class="btn btn-success" name="signin" id="signin">Sign Up</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-md-6">
<ul>
<li>
  <button class="btn btn-success" style="width:200px; margin:91px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
</li>
<li>
  <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
</li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
  <center>
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
  </center>
</div>
</div>
</div>
</div>
<!--lightbox login end-->
<div id="myModallogin" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<br>
<div class="bs-example bs-example-tabs">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a data-toggle="tab" href="#lschool">School</a></li>
    <li class=""><a data-toggle="tab" href="#lcollege">College</a></li>
    <li class=""><a data-toggle="tab" href="#lcorporate">Corporate</a></li>
  </ul>
</div>
<div class="modal-body" style="height:260px;">
<div class="tab-content" id="myTabContent">
<div id="lcorporate" class="tab-pane fade">
  <div class="col-md-6">
    <form class="form-horizontal cs4">
      <input type="hidden" name="type" value="3" />
      <fieldset>
        <!-- Sign In Form --> 
        <!-- Text input-->
        <div class="control-group">
          <label for="userid" class="control-label">Email</label>
          <div class="controls">
            <input type="text" placeholder="email id" class="form-control" name="email" id="email" required="">
          </div>
        </div>
        <!-- Password input-->
        <div class="control-group">
          <label for="passwordinput" class="control-label">Password:</label>
          <div class="controls">
            <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
          </div>
        </div>
        <!-- Button -->
        <div class="control-group">
          <label for="signin" class="control-label"></label>
          <div class="controls">
            <button class="btn btn-success" name="signin" id="signin">Sign In</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="col-md-6">
  <ul>
    <li>
      <button class="btn btn-success" style="width:200px; margin:51px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
    </li>
    <li>
      <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
    </li>
    </div>
  </ul>
</div>
<div id="lcollege" class="tab-pane fade active in">
<div class="col-md-6">
  <form class="form-horizontal cs5">
    <input type="hidden" name="type" value="2" />
    <fieldset>
      <!-- Sign In Form --> 
      <!-- Text input-->
      <div class="control-group">
        <label for="userid" class="control-label">Email</label>
        <div class="controls">
          <input type="text" placeholder="email id" class="form-control" name="email" id="email" required="">
        </div>
      </div>
      <!-- Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Password:</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label for="signin" class="control-label"></label>
        <div class="controls">
          <button class="btn btn-success" name="signin" id="signin">Sign In</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-md-6">
<ul>
<li>
  <button class="btn btn-success" style="width:200px; margin:51px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
</li>
<li>
  <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
</li>
</div>
</div>
<div id="lschool" class="tab-pane fade">
<div class="col-md-6">
  <form class="form-horizontal cs6">
    <input type="hidden" name="type" value="1" />
    <fieldset>
      <!-- Sign In Form --> 
      <!-- Text input-->
      <div class="control-group">
        <label for="userid" class="control-label">Email</label>
        <div class="controls">
          <input type="text" placeholder="email" class="form-control" name="email" id="email" required="">
        </div>
      </div>
      <!-- Password input-->
      <div class="control-group">
        <label for="passwordinput" class="control-label">Password:</label>
        <div class="controls">
          <input type="password" placeholder="********" class="form-control" name="password" id="password" required="">
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label for="signin" class="control-label"></label>
        <div class="controls">
          <button class="btn btn-success" name="signin" id="signin">Sign In</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-md-6">
<ul>
<li>
  <button class="btn btn-success" style="width:200px; margin:51px 0 20px 0;" name="facebook" id="facebook"><i class="icon-facebook"></i>&nbsp; Signin Facebook</button>
</li>
<li>
  <button class="btn btn-success" style="width:200px; margin:0 0 20px 0;" name="google" id="google"><i class="icon-google-plus"></i>&nbsp; Signin Google Plus</button>
</li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
  <center>
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
  </center>
</div>
</div>
</div>
</div>
<!--lightbox login end--> 

<a href="#" class="scrollup"><i class="icon-chevron-up"></i></a>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo9zsQwplP3bgc4mYmC597Lnx616HyhU4&sensor=true"></script> 
<script type="text/javascript">
// Google Map Maker script v.4
// (c) 2014 Richard Stephenson
// http://mapmaker.donkeymagic.co.uk
var map
    openInfowindow = null
    newPoints = [];

function initialize () {
    var mapOptions = {
        center: new google.maps.LatLng(17.444605, 78.44874099999993),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        streetViewControl: false
    };
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    addPoints();
}

function addPoints () {
    newPoints[0] = [17.444605, 78.448741, 'Campus Wave IT School', '#7-3-192, First Floor,Opposite to Pratul Honda Showroom,Balkampet road, S.R Nagar,Hyderabad-500016'];
    for (var i = 0; i < newPoints.length; i++) {
        var position = new google.maps.LatLng(newPoints[i][0], newPoints[i][1]);
        var marker = new google.maps.Marker({
            position: position,
            map: map
        });
        createMarker(marker, i);
    }
}

function createMarker (marker, i) {
    var infowindow = new google.maps.InfoWindow({
        content: '<div class="popup">' + newPoints[i][3] + '</div>',
    });
    google.maps.event.addListener(marker, 'click', function () {
        if (openInfowindow) {
            openInfowindow.close();
        }
        infowindow.open(marker.getMap('map_canvas'), marker);
        openInfowindow = infowindow;
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
<!--<ul style="max-width: 300px;" class="nav nav-pills nav-stacked">
      <li class="active" role="presentation"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>-->
    <div class="grid_3">
    <!--<div class="bs-example">
    <div class="panel panel-default">
     
      <div class="panel-heading">Campus Wave</div>
      <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      
      <ul class="list-group">
        <li class="list-group-item"><a class="active" href="#">Overview</a></li>
        <li class="list-group-item"><a href="#">4E frame work</a></li>
        <li class="list-group-item"><a href="#">Training</a></li>        
      </ul>
    </div>
  </div>-->  
        
    </div>