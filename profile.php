<?php
require_once('session.php');
require_once('config.php');
include 'lib/header.php';
if(isset($_SESSION['userid'])=="")
{
  header('Location:index.php');
}
$cities = $cw->getCities();

?>

  <!-- Slider -->
  <section id="maincontent">
    <div class="container container_12">
      <div class="grid_12" style="height:150px; background:#CCC;"></div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- POST GRID --> 
  </section>
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
        <h1>Profile Page</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_8">
      <form role="form" class="details_form">
   <div class="form-group grid_6">
      <label for="name"> *First Name</label>
      <input type="text" class="form-control" name="f_name" id="f_name" 
         placeholder="Enter Name">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Last Name</label>
      <input type="text" class="form-control" name="l_name" id="l_name" 
         placeholder="Enter Name">
   </div> 
   <!-- <div class="form-group grid_6">
      <label for="name"> *Email</label>
      <input type="text" class="form-control" id="name" 
         placeholder="Enter Email">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Repeat Email</label>
      <input type="text" class="form-control" id="name" 
         placeholder="Enter Repeat Email">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Password</label>
      <input type="password" class="form-control" id="name" 
         placeholder="Enter Password">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Repeat Password</label>
      <input type="password" class="form-control" id="name" 
         placeholder="Enter Repeat Password">
   </div> -->
   <div class="form-group grid_6">
      <label for="name"> *Mobile</label>
      <input type="text" class="form-control" name="mobile" id="mobile" 
         placeholder="Enter Mobile">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Current City</label>
      <select class="form-control" name="city" id="city">
               <option>Select City</option>
               <?php foreach ($cities as $key => $value) {
                
               ?>
                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                <?php
              }
              ?>
            </select>
   </div>
   <div class="clearfix"></div>
   <h3 class="grid_12">Qualification</h3>
   <div class="clearfix"></div>
   <div class="form-group grid_6">
      <label for="name"> *Highest Qualification Details</label>
      <select class="form-control" name="qualification" id="qualification">
               <option>Select City</option>
                <option>M.Tech</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Branch</label>
      <select class="form-control" name="branch" id="branch">
               <option>Select Branch</option>
                <option>M.Tech</option>
            </select>
   </div>
   <div class="form-group grid_3">
      <label for="name"> *Pass Out Month</label>
      <select class="form-control" name="month" id="month">
               <option>Select Month</option>
                <option>Pass Out Month</option>
            </select>
   </div>
   <div class="form-group grid_3">
      <label for="name"> *Pass Out Year</label>
      <select class="form-control" name="year" id="year">
               <option>Select City</option>
                <option>Pass Out Year</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label class="grid_12" for="name"> *Marks</label>
      <div class="grid_5"><label>
      <input style="margin-top:0px;" type="radio" id="markss" value="Percentage" name="markss"> Percentage 
      </label></div>
      <div class="grid_5"><label>
      <input type="radio" style="margin-top:0px;" id="marks1" value="CGPA" name="markss"> CGPA(out of 10)
      </label></div>
      <div class="grid_2"> <input type="text" class="form-control" id="marks" name="marks"></div>
   </div>
   
   <div class="form-group grid_6">
      <label for="name">  *Your College Details </label>
      <select class="form-control" name="inst_location" id="inst_location">
               <option>Institute Location</option>
                <option>Andhra Pradesh</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name">  *Select Institute </label>
      <select class="form-control" name="inst" id="inst">
               <option>Select Institute</option>
                <option>SMU</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name">  *Select University </label>
      <select class="form-control" name="university" id="university">
               <option>Select University</option>
                <option>SMU</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name" class="grid_12">  *Captcha </label>
      <div class="grid_6">
      <input type="text" class="form-control" id="name" 
         placeholder="Captcha Code"></div>
        <div class="grid_6"> <input type="text" class="form-control" id="name" 
         placeholder="Captcha Code"></div>
   </div>
   <input type="button" value="Submit" id="profile_update" class="btn btn-default">
   

</form>
</div>
      <!--<div class="grid_4"><form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">email@example.com</p>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" 
         placeholder="Password">
    </div>
  </div>
</form></div>-->
      
      <div class="clearfix"></div>
    </div>
  </section>
  <?php
include 'lib/footer.php';
?>
<script>
  $('#profile_update').click(function(){
      
      var str = $('.details_form').serialize();
      
        $.post('user_profile_update.php',str,function(data){
          if(data.status != 1){
            alert(data.error);
          }
          else{
            alert(data.data);
            //window.location.reload();
          }
        });
      });
</script>