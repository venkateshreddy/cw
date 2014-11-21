<?php
include 'lib/header.php';
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
        <h1>ECE</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_12">     
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#esystem" data-toggle="tab">Embedded Systems</a></li>
              <li class=""><a href="#dsp" data-toggle="tab">DSP</a></li>
              <li class=""><a href="#vlsi" data-toggle="tab">VLSI</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="vlsi">
       Coming Soon VLSI
        </div>
        <div class="tab-pane fade active in" id="dsp">
             Coming Soon DSP
        </div>
        <div class="tab-pane fade" id="esystem">
            Coming Soon Embedded Systems
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
include 'lib/footer.php';
?>