<?php
error_reporting(E_ALL);
include 'lib/header.php';
require_once('config.php');
$projects = $cw -> getProjects();
$qual = $cw -> getQualfications();
//$sub = $cw -> getSubjects();
?>
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
        <h1>Acedmic Projects</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_12">     
        <div class="bs-example bs-example-tabs">
           <!--  <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#esystem" data-toggle="tab">Embedded Systems</a></li>
              <li class=""><a href="#dsp" data-toggle="tab">DSP</a></li>
              <li class=""><a href="#vlsi" data-toggle="tab">VLSI</a></li>
            </ul> -->
          <select name="qualfication" id="qualifid" class="field-select" onchange="ShowCourse(this.value)">
            <option value="">Select Qualfication</option>
            <?php
            foreach ($qual as $key => $value) {            
            ?>
            <option value="<?=$value['qid']?>"><?=$value['qname']?></option>
            <?php
            }
          ?>
          </select>

          <select id="courses" name="course" class="field-select" onchange="ShowPlatform(this.value)">
          <option value="">Select Qualification First</option>
        </select>

        <select name="platform" id="subjectid" class="field-select">
            <option value="">Select Platform</option>            
          </select>

        <select name="project_type" id="projectid" class="field-select" onchange="ShowProjects(this.value)">
        <option value="">Select Project</option>
        <option value="1">Mini Project</option>
        <option value="2">Main Project</option>
      </select>

        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="vlsi">
       <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr class="info">
            <th>Sno</th>
            <th>Projects List </th>
            <th>Abstract</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>
        <div class="tab-pane fade active in" id="dsp">
             <table class="table table-bordered">
        <thead>
          <tr class="info">
            <th>Sno</th>
            <th>Projects List </th>
            <th>Abstract</th>
          </tr>
        </thead>
        <tbody  id="tableid">          
        </tbody>
      </table>
        </div>
        <div class="tab-pane fade" id="esystem">
            <table class="table table-bordered">
        <thead>
          <tr class="info">
            <th>Sno</th>
            <th>Projects List </th>
            <th>Abstract</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>RFID ENHANCES VISITORS' MUSEUM WITH VOICE & IMAGE TRANSMISSION.</td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      &nbsp;<br>
      </div>
    
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <?php
include 'lib/footer.php'; ?>


<script type="text/javascript">
  function deletetesti(id){
    var con = confirm("Are you sure you want to Delete this..?");
    if(con == true){
      $.post('delete_projects.php',
      {
        id : id
      },
      function(data){
            if(data == 1){
              alert('Successfully deleted.');
              location.reload();
            }
            
          });
    }else{
      return false;
    }
  }
  
$("#qualifid").change(function(){
        var id = $(this).val(); 
        if(id == ""){
          alert("you must select the Qualfication");
        }
        else{
          $.post("get_courses.php",{id:id},function(data){
            if(data.status==0){
              alert(data.error);
            }
            else{
              $("#courses").html("<option value=''>Select</option>");
              if(data.data.length == 0){
                str = "<option value='0'>course Not Found</option>";
                $("#courses").append(str);
              }
              else{
                for(i=0; i<data.data.length;i++){
                  str = "<option value='"+data.data[i].qid+"'>"+data.data[i].qname+"</option>";
                  $("#courses").append(str);   
                }
              }
            }
          });
        }
      });

$("#courses").change(function(){
        var id = $(this).val();
        if(id == ""){
          alert("you must select the course");
        }
        else{
          $.post("get_platform.php",{id:id},function(data){
            if(data.status==0){
              alert(data.error);
            }
            else{
              $("#subjectid").html("<option value=''>Select</option>");
              if(data.data.length == 0){
                str = "<option value='0'>platform Not Found</option>";
                $("#subjectid").append(str);
              }
              else{
                for(i=0; i<data.data.length;i++){
                  str = "<option value='"+data.data[i].id+"'>"+data.data[i].name+"</option>";
                  $("#subjectid").append(str);   
                }
              }
            }
          });
        }
      });


 /*function ShowPlatform(id){
    $.post('get_platform.php',
      {
        id : id
      },
      function(data){
            if(data){
             $('#subjectid').html(data);
            }
            
          });
  }*/

function ShowProjects(id){
  var pidvar = $('#subjectid').val();
  //alert(pidvar);
     $.post('get_projects.php',
      {
        id : id,
        pid : pidvar,  
      },
      function(data){
            if(data){ //alert(data);
             $('#tableid').html(data);
            }
            
          });
  }

$("#qualifid").on("click", function () {
    $('#subjectid').prop('selectedIndex',0);
    $('#projectid').prop('selectedIndex',0);
});
</script>