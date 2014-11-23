<?php
if(!isset($is_from_profile)){
  header('location: profile.php');
  exit;
}
$designations = $cw->getRoles(2);
$cities = getCitiesbyState($cw);
?>
  <!-- Slider -->
<!--   <section id="maincontent">
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
        <h1>Profile Page2</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_8">
      <form role="form" class="myform">
   <div class="form-group grid_6">
      <label for="name"> *Account Type</label>
      <select class="form-control" required="" name="account_type">
      <option value="">Select</option>  
      <option value="1">College/University</option>
      <option value="2">Training Institute</option>
      <option value="3">Educational Consultants</option>
      <option value="4">Others</option>
</select>
      
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Institute Name</label>
      <input type="text" required="" class="form-control" name="institute" placeholder="Institute Name">
   </div> 
   <div class="form-group grid_6">
      <label for="name"> *Contact Person Name </label>
      <input type="text" class="form-control" required="" name="contact_person" placeholder="Contact Person Name">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Mobile</label>
      <input type="number" class="form-control" required="" name="mobile" placeholder="Enter Mobile">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Designation</label>
      <select class="form-control" name="designation" required="">
        <option value="">--Select--</option>
        <?php 
          foreach($designations as $ke=>$valu){
            echo "<option value='".$value['id']."'>".$valu['name']."</option>";
          }
        ?>
      </select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *City</label>
     <select class="form-control" name="city" required="">
      <option value="">Select City</option>
      <?php
        foreach($cities as $state=>$cities_arr){
          echo "<optgroup label='".$state."'>";
            foreach($cities_arr as $k=>$city_arr){
              echo "<option value='".$city_arr['id']."'>".$city_arr['name']."</option>";
            }
          echo "</optgroup>";
        }
        ?>  
      </select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Service Interested</label>
      <textarea class="form-control" required="" cols="" rows="" name="requirements"></textarea>
   </div>
   <div class="form-group grid_6">
      <label for="name" class="grid_12">  *Captcha </label>
      <div class="grid_6" style="width: 30%;margin-top: 1.5%;">
        <img class="captcha" src="lib/captcha.php" />
        &nbsp;&nbsp;
        <img src="images/Refresh.png" class="captcha_refresh" title="Refresh Captcha" style="height:20px;cursor:pointer;" />
      </div>
        <div class="grid_6"> <input type="text" required="" class="form-control" name="captcha" placeholder="Captcha Code"></div>
   </div>
      
   <div class="grid_12"><button  type="submit" class="btn btn-default">Submit</button><br><br></div>
      
</form>
</div>
      <div class="clearfix"></div>
    </div>
  </section>
  <script>
  $(document).ready(function(){
    $('.captcha_refresh').click(function(){
      $('.captcha').each(function(){
        $(this).attr('src', 'lib/captcha.php?'+new Date().getTime());
      });
    });
    $('.myform').submit(function(){
      var str = $(this).serialize();
      $.post('institute_profile.php', str, function(data){
        if(data.status != 1){
                alert(data.error);
            }
            else{
              alert(data.data);
               window.location = 'institute_home.php';
            }
      });
      event.preventDefault();
    });
  });
</script>
  <?php
include 'lib/footer.php';
?>