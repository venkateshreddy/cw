<?php
require_once('session.php');
include 'lib/header.php';
if(isset($_SESSION['userid'])=="")
{
  header('Location:index.php');
}
else{
  $is_from_profile = true;
  if($_SESSION['type']==2){
    require_once('profile1.php');
    exit;
  }
  else if($_SESSION['type']==3){
    require_once('profile2.php');
    exit;
  }
}
$cities = $cw->getCities();
$qualifications = $cw->getActiveQualifications();
$cities = getCitiesbyState($cw);
$universities = $cw->getUniversities();
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
        <h1>Profile Page</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_8">
      <form role="form" class="details_form">
   <div class="form-group grid_6">
      <label for="name"> *First Name</label>
      <input type="text" class="form-control" required="" name="f_name" id="f_name" 
         placeholder="Enter Name">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Last Name</label>
      <input type="text" class="form-control" required="" name="l_name" id="l_name" 
         placeholder="Enter Name">
   </div> 
   <div class="form-group grid_6">
      <label for="name"> *Mobile</label>
      <input type="number" class="form-control" required="" name="mobile" id="mobile" 
         placeholder="Enter Mobile">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Current City</label>
      <select class="form-control" required="" name="city" id="city">
               <option>Select City</option>
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
   <div class="clearfix"></div>
   <h3 class="grid_12">Qualification</h3>
   <div class="clearfix"></div>
   <div class="form-group grid_6">
      <label for="name"> *Highest Qualification Details</label>
      <select class="form-control" required="" name="qualification" id="qualification">
               <option value="">Select</option>
               <?php foreach($qualifications as $key=>$val){ ?>
                  <option value="<?=$val['qid']?>"><?=$val['qname']?></option>
               <?php } ?>
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Branch</label>
      <select class="form-control" required="" name="branch" id="branch">
               <option>Select</option>
            </select>
   </div>
   <div class="form-group grid_3">
      <label for="name"> *Pass Out Month</label>
      <select class="form-control" required="" name="month" id="month">
               <option value="">Select Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
   </div>
   <div class="form-group grid_3">
      <label for="name"> *Pass Out Year</label>
      <select class="form-control" required="" name="year" id="year">
               <option value="">Select Year</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
            </select>
   </div>
   <div class="form-group grid_6">
      <label class="grid_12" for="name"> *Marks</label>
      <div class="grid_5"><label>
      <input style="margin-top:0px;" checked="checked" type="radio" id="markss" value="Percentage" name="markss"> Percentage 
      </label></div>
      <div class="grid_5"><label>
      <input type="radio" style="margin-top:0px;" id="marks1" value="CGPA" name="markss"> CGPA(out of 10)
      </label></div>
      <div class="grid_2"> <input type="text" class="form-control" id="marks" name="marks"></div>
   </div>
   
   <!-- <div class="form-group grid_6">
      <label for="name">  *Your College Details </label>
      <select class="form-control" name="inst_location" id="inst_location">
               <option>Institute Location</option>
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
   </div> -->
   <div class="form-group grid_6">
      <label for="name">  *Select University </label>
      <select class="form-control" name="university" id="university">
               <option value="">Select University</option>
               <option value="0">Deemed University</option>
               <?php foreach($universities as $key=>$val){ ?>
                <option value="<?=$val['id']?>"><?=$val['name']?>, <?=$val['location']?></option>
               <?php } ?> 
            </select>
   </div>
   <div class="form-group grid_6">
      <label for="name">  *Select Institute </label>
      <select class="form-control" name="inst" id="inst">
        <option>Select Institute</option>
      </select>
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
   <div style="clear:both"></div>
   <div class="form-group grid_6"><input type="submit" value="Submit" class="btn btn-default"></div>
   

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
  $(document).ready(function(){
      $('.details_form').submit(function(event){
        
        var str = $('.details_form').serialize();
        
          $.post('user_profile_update.php',str,function(data){
            if(data.status != 1){
              alert(data.error);
            }
            else{
              alert(data.data);
            }
          });
          event.preventDefault();
      });
      $("#qualification").change(function(){
        var id = $(this).val();
        if(id == ""){
          alert("you must select the qualification");
        }
        else{
          $.post("getGroups.php",{id:id},function(data){
            if(data.status==0){
              alert(data.error);
            }
            else{
              $("#branch").html("<option value=''>Select</option>");
              if(data.data.length == 0){
                str = "<option value='0'>No Branch</option>";
                $("#branch").append(str);
              }
              else{
                for(i=0; i<data.data.length;i++){
                  str = "<option value='"+data.data[i].qid+"'>"+data.data[i].qname+"</option>";
                  $("#branch").append(str);   
                }
              }
            }
          });
        }
      });
      $("#university").change(function(){
        var id = $(this).val();
        if(id == ""){
          alert("you must select the university");
        }
        else{
          $.post("getColleges.php",{id:id},function(data){
            if(data.status==0){
              alert(data.error);
            }
            else{
              $("#inst").html("<option value=''>Select</option>");
              if(data.data.length == 0){
                str = "<option value='0'>College Not Found</option>";
                $("#inst").append(str);
              }
              else{
                for(i=0; i<data.data.length;i++){
                  str = "<option value='"+data.data[i].id+"'>"+data.data[i].name+", "+data.data[i].location+"</option>";
                  $("#inst").append(str);   
                }
              }
            }
          });
        }
      });
  })
</script>