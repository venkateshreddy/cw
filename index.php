<?php
$is_index = true;
include 'session.php';
include 'lib/header.php';
$banners = $cw -> getBanngerImages();
$testimonials = $cw -> getTestimonials();
$hotnews = $cw -> getWhatsHot();
?>
  <!-- Slider -->
  <section id="maincontent">
    <div class="container container_12"> 
      <!-- Slider -->
      <div class="grid_12">
        <div class="bigslide flexslider">
          <div class="overlay"></div>
          <ul class="slides">
            <?php foreach($banners as $key=>$val){ ?>
              <li><img src="images/banner/<?=$val['image']?>" alt="Banner Image"/>
                <div class="capcontain">
                  <div class="slidetitle">
                    <!-- <h2><?=$val['slidetitle']?></h2> -->
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
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
      <!-- LEFT -->
      <div class="grid_3">
        <div class="widgetbox darkblue">
          <h4><i class="icon-comments"></i> Testimonials</h4>
           <?php foreach($testimonials as $key=>$val){ ?> 
            <article class="comitem">
              <!-- <div class="grid_3">
                <div class="comthumb"><img src="images/assets/author.jpg" class="circle" alt="image"/></div>
              </div> -->
              <div class="grid_9" style="width: 100%; padding: 0px 10px; text-align: justify;"> 
                <strong><?=$val['name']?>:</strong> 
                <em><?=$val['content']?></em> 
              </div>
            </article>
            <?php } ?>
        </div>
      </div>
      <!-- END SIDEBAR RIGHT -->
      <div class="grid_6"> 
        <!-- LOOP HERE... PUT THE QUERY HERE -->
        <article class="singlepost">
          <div class="content-entry">
            <h2>About Campus Wave IT School</h2>
            <p>Campus wave is an it school which offers wide range of career development programs for students, works under MNT soft Pvt Ltd and established by highly experienced real time experts with an aim to act as a bridge between academics and industry. We concentrate on training, executing academic projects, conducting workshops and we provide placement assistance for the students and colleges.</p>
          </div>
          <div class="clearfix"></div>
          
          <!-- RELATED --> 
        </article>
        <!-- END/CLOSE THE QUERY HERE -->
        <div class="clearfix"></div>
      </div>
      <!-- SIDEBAR --> 
      <!-- Right -->
      <div class="grid_3">
        <div class="widgetbox orange">
          <h4><i class="icon-fire"></i> What's Hot</h4>
          <ul>
            <?php foreach($hotnews as $key=>$val){
              ?>
                <li><a href="<?=$val['link']?>" target="blank"><?=$val['title']?></a></li>
              <?php
              } ?>
          </ul>
        </div>
       <!--  <div class="widgetbox red">
          <h4> Video</h4>
          <div class="singlePosThumb">
            <div class="videothumb posthumb"> 
              <img src="images/assets/vow.jpg" alt="CW"/> 
                <a href="http://www.youtube.com/watch?v=v9SWIsY8rzQ" class="vidplay" title="CW" rel="prettyPhoto"> <i class="icon-play-circle icon-3x"></i> </a> </div>
          </div>
        </div> -->
      </div>
      <!-- END SIDEBAR RIGHT -->
      <div class="clearfix"></div>
      <div class="container_12">
        <div class="grid_12">
          <div class="textdev text-center">
            <h3 class="fword">Our Clients</h3>
            <div></div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="loopCarousel">
          <ul class="slides">
            <li>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                    <div class="posthumb"><a href="#"> <img src="images/clients/client1.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                    <div class="posthumb"><a href="#"> <img src="images/clients/client2.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                    <div class="posthumb"><a href="#"> <img src="images/clients/client3.jpg" alt="image"/> </a></div>
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client4.jpg" alt="image"/> </a></div>
                   
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client5.jpg" alt="image"/> </a></div>
                   
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client7.jpg" alt="image"/> </a></div>
                   
                  </header>
                </article>
              </div>
            </li>
            <li>
             <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client6.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client1.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client2.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client3.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client4.jpg" alt="image"/> </a></div>
                    
                  </header>
                </article>
              </div>
              <div class="grid_2" style="border:1px solid #3498db;">
                <article class="gridpost ajaxloop text-center">
                  <header>
                   <div class="posthumb"><a href="#"> <img src="images/clients/client5.jpg" alt="image"/> </a></div>                    
                  </header>
                </article>
              </div>
              
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <?php
include 'lib/footer.php';
?>