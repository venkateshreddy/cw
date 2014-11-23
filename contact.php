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

          <form>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-user"></i> Full Name</label>
              <div class="controls controls-row">
                <input type="text" placeholder="Cool Person" id="inputEmail" class="input-xxlarge">
              </div>
            </div>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-envelope"></i> Email</label>
              <div class="controls">
                <input type="text" placeholder="you@yourdomain.com" id="inputEmail" class="input-xxlarge">
              </div>
            </div>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-question-sign"></i> Subject</label>
              <div class="controls">
                <input type="text" placeholder="what's up?" id="inputSubject" class="input-xxlarge">
              </div>
            </div>

            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-pencil"></i> Message</label>
              <div class="controls">
                <textarea placeholder="What's on your mind?" class="input-xxlarge" rows="6"></textarea>
              </div>
            </div>
            
            <div class="control-group">
              <label for="inputEmail" class="control-label"><i class="icon-envelope-alt"></i> Recipient</label>
              <div class="controls">
              <select class="form-control">
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
              <label style="margin:0px; padding:0 10px 0 0;">Low<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value=""></span></label>
              <label style="margin:0px; padding:0 10px 0 0;">Medium<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value=""></span></label>
              <label style="margin:0px; padding:0 10px 0 0;">High<span style="padding:0 0 0 5px;"><input style="margin:0px;" name="priority" type="radio" value=""></span></label>
              </div>
            </div>

            <div class="control-group" style="padding:10px 0 0 0;">
    <div class="controls">
      <button class="btn btn-success" type="submit">Send Message</button>
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