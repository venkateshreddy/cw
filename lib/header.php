<?php
require_once('session.php');
require_once('config.php');
if(isset($_SESSION) && isset($_SESSION['userid'])){
  if(!isset($_SESSION['name']) || $_SESSION['name']!="")
  { 
    $user_details = $cw->getUserName($_SESSION['userid'], $_SESSION['type']);
    $_SESSION['name'] = $user_details['name'];
  }
}
$latest_news = $cw->getLatestNews();
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Wave</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script> 
<script type="text/javascript" src="js/plugin.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript" src="js/function.js"></script> 
<!-- TAB JS --> 
<script type="text/javascript" src="javascripts/vendor/waypoints.min.js"></script> 
<script type="text/javascript" src="javascripts/vendor/waypoints-sticky.min.js"></script> 
<script type="text/javascript" src="javascripts/vendor/jquery.tabslet.min.js"></script> 
<script src="javascripts/initializers.js"></script> 
<!--TAB JS ends --> 
<!-- SWITCH -->
<link id="switchyuk" rel="stylesheet" type="text/css" href="css/schemes/orange.css" />
<script type="text/javascript" src="js/jquery.cookie.js"></script> 
<script type="text/javascript" src="js/themeswitch.js"></script> 
<!-- SWITCH -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<style>
* {
    margin: 0;
    padding: 0;
}
div.popup {
    font-size: 14px;
    margin: 0;
    width: 270px;
}
div.popup p {
    background-color: #FFF;
    color: #333;
    font-size: 12px;
    line-height: 15px;
}
div.popup p a {
    color: #1122CC;
}
</style>
</head>
<body>
<!-- Start -->
<div class="clearfix"></div>
<div class="parentcontainer" id="boxed">
<div id="mobile-header">
  <div id="container_12">
    <div class="grid_4"> <a id="simple-menu"  href="#sidr" class="sidrmenu"><i class="icon-list-ul"></i></a> </div>
    <div class="grid_4 text-center">
      <p>Campus</p>
    </div>
    <div class="grid_4 text-right"> <a id="righttrigger" href="#rightmenu" class="sidrmenu"><i class="icon-search"></i></a> </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div id="sidr" style="display:none;"> 
  <!--<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>-->
  <h2>Pages</h2>
  <ul>
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="#" class="">Services</a>
      <ul>
        <li><a href="learning-center.php" target="_blank">Learning Center</a></li>
        <li><a href="acedmic-project.php">Acedmic Projects</a>
          <ul>
            <li><a href="#">B.E / B.Tech</a>
              <ul>
                <li><a href="#">Mini Project</a>
                  <ul>
                    <li><a href="#">ECE</a>
                      <ul>
                        <li><a href="#">Embedded Systems</a></li>
                        <li><a href="#">DSP</a></li>
                        <li><a href="#">VLSI</a></li>
                      </ul>
                    </li>
                    <li><a href="#">EEE</a>
                      <ul>
                        <li><a href="#">Power Electronics</a></li>
                        <li><a href="#">Power Systems</a></li>
                      </ul>
                    </li>
                    <li><a href="#">CSE & IT</a>
                      <ul>
                        <li><a href="#">JAVA</a></li>
                        <li><a href="#">.NET</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Main Project</a>
                  <ul>
                    <li><a href="#">ECE</a>
                      <ul>
                        <li><a href="#">Embedded Systems</a></li>
                        <li><a href="#">DSP</a></li>
                        <li><a href="#">VLSI</a></li>
                      </ul>
                    </li>
                    <li><a href="#">EEE</a>
                      <ul>
                        <li><a href="#">Power Electronics</a></li>
                        <li><a href="#">Power Systems</a></li>
                      </ul>
                    </li>
                    <li><a href="#">CSE & IT</a>
                      <ul>
                        <li><a href="#">JAVA</a></li>
                        <li><a href="#">.NET</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">MBA / MCA / M.TECH</a>
              <ul>
                <li><a href="#">CSE IT</a>
                  <ul>
                    <li><a href="#">JAVA</a></li>
                    <li><a href="#">.NET</a></li>
                  </ul>
                </li>
                <li><a href="#">ECE</a>
                  <ul>
                    <li><a href="#">VLSI</a></li>
                    <li><a href="#">EMBEDDED SYSTEM</a></li>
                    <li><a href="#">DSP/DIP</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="training-mentoring.php">Training & Mentoring</a></li>
        <li><a href="recuriment.php">Recuriment</a></li>
        <li><a href="workshops.php">Workshops</a></li>
        <li><a href="paper-publication.php" class="">Paper Publication</a></li>
      </ul>
    </li>
    <li><a href="#" class="">About Us</a>
      <ul class="sub-menu">
        <li><a href="vision-misson.php">Vision &  Mission</a></li>
      </ul>
    </li>
    <li><a href="clients.php" class="">Clients</a></li>
    <li><a href="contact.php" class="">Contact Us</a></li>
  </ul>
</div>
<div id="rightmenu">
  <h1>Search</h1>
  <form>
    <input type="text" placeholder="Search...">
  </form>
</div>
<!--  HEADER 	-->
<header id="mainheader" class="mobile-hide">
  <div class="container container_12"> 
    <!-- Logo -->
    <div class="grid_2"><a href="index.php"><img src="images/logo.png" alt="Campus Wave"/></a></div>
    <div class="grid_7">
      <nav id="navigation" style="display:none;">
        <ul id="main-menu">
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="learning-center.php" target="_blank" class="">Services</a>
            <ul class="sub-menu">
              <li><a href="learning-center.php" target="_blank">Learning Center</a></li>
              <li><a href="acedmic-project.php">Acedmic Projects</a>
                <ul class="sub-menu">
                  <li><a href="#">B.E / B.Tech</a>
                    <ul class="sub-menu">
                      <li><a href="#">Mini Project</a>
                        <ul class="sub-menu">
                          <li><a href="beece.php">ECE</a></li>
                          <li><a href="beeee.php">EEE</a></li>
                          <li><a href="beit.php">CSE & IT</a></li>
                          <li><a href="bemechanical.php">MECHANICAL </a></li>
                        </ul>
                      </li>
                      <li><a href="#">Main Project</a>
                        <ul class="sub-menu">
                          <li><a href="mainece.php">ECE</a></li>
                          <li><a href="maineee.php">EEE</a></li>
                          <li><a href="mainit.php">CSE & IT</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">MBA / MCA / M.TECH</a>
                    <ul class="sub-menu">
                      <li><a href="mbit.php">CSE IT</a></li>
                      <li><a href="mbece.php">ECE</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="training-mentoring.php">Training & Mentoring</a></li>
              <li><a href="recruitment.php">Recruitment</a></li>
              <li><a href="workshops.php">Workshops</a></li>
              <li><a href="paper-publication.php" class="">Paper Publication</a></li>
            </ul>
          </li>
          <li><a href="about.php" class="">About Us</a>
            <ul class="sub-menu">
              <li><a href="vision-mission.php">Vision &  Mission</a></li>
            </ul>
          </li>
          <li><a href="clients.php" class="">Clients</a></li>
          <li><a href="contact.php" class="">Contact Us</a></li>
        </ul>
      </nav>
    </div>
      <div class="grid_3 text-right">
        <?php
         if(!isset($_SESSION) || !isset($_SESSION['userid']) || $_SESSION['userid']==""){
        ?>
          <ul class="login">
            <li> <a href="#" data-toggle="modal" data-target="#myModalsignup">Signup</a> &nbsp;&nbsp;| </li>
            <li> <a href="#" data-toggle="modal" data-target="#myModallogin">Login</a> </li>
          </ul>
          <div class="topmenu">
            <div class="hdrbtn"><img src="images/facebook.png" alt="Face Book"/></div>
            <div class="hdrbtn"><img src="images/google.png" alt="Google"/></div>
            <div class="hdrbtn"><img src="images/in.png" alt="In"/></div>
          </div>
      <?php
        }
      else{ ?>
        <ul class="login">
            <li><strong>Welcome</strong></li>
            <li title="View Profile"><a href="profile.php"><strong><?=$_SESSION['name']?></strong></a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
     <?php }
    ?>
      </div>
  </div>
  <div class="clearfix"></div>
</header>
<div class="clearfix"></div>
<!--  Newsticker  -->
<div class="container_12 mobile-hide">
  <div class="grid_2">
    <h4 class="fword">Latest News</h4>
  </div>
  <div class="grid_7" id="latestnews" style="display:none;">
    <div class="newsticker">
      <ul class="slides">
        <?php foreach ($latest_news as $key => $value) {
          ?>
          <li>
            <h2><a href="<?=$value['link']?>" target="blank"><?=$value['title']?></a> | <?=$value['date']?></h2>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="grid_3"> 
    <!-- DIsplay the Date -->
    <div id="Date" class="mobile-hide text-right"></div>
  </div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#navigation").show();
    $("#sidr").show();
    $("#latestnews").show();
  });
</script>
