<?php
  session_start();
  include ('connection.php');
?>


<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Wildhardt Mode</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Google font -->


  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/googleapi.js"></script>
  
  <script>


function initialize() {
      var myLatlng = new google.maps.LatLng(50.08373, 8.28307);
      var myOptions = {
        zoom: 15,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.TERRAIN,
      }
      var map = new google.maps.Map(document.getElementById("google-map"), myOptions);

     var contentString = "<div class=\"zinfowindow\">Wildhardt Women's Wiesbaden<\div>";

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Wildhardt Women's wear Wiesbaden"       
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
    
  
    
  }
    </script>

</head>
<body >
<!--Facebook code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=172193856308272";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="row">
  <div class="large-12 columns">

    <!-- Navigation -->
    
          <div class="fixed"> 
          <nav class="top-bar">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                <h1>
                  <a href="#">
                    <img src="img/logo.png">
                  </a>
                </h1>

              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
             <ul class="right">
                <li><a href="#sobrenos">Über uns</a></li>
                <li><a href="#out_mon">Outfit das Monates</a></li>
                <li><a href="#galerie">Galerie</a></li>
                <li><a href="#marken">Unsere Marken</a></li>
                <li><a href="#contactos">Kontakte</a></li>
                <li><a href="#social">Social</a></li>
              </ul>
            </section>
        </nav>
     
      </div> 
  <!-- End Navigation -->
  </div>    
</div>

<br />
<div class="row_full"> 
    <div class="large-12">
    
    <!-- Desktop Slider -->
        <div class="preloader"></div>
        <!--<h3> Willkommen zu Wilhardt Mode </h3>-->
         <ul id="featured1" data-orbit data-options="timer_speed:5000;bullets:false;animation:fade;pause_on_hover:false;navigation_arrows:false;slide_number:false;">
              <li>
                <img src="img/top1.jpg" style='width:100%;'/>
              </li>
              <li>
                <img src="img/top2.jpg" style='width:100%;' />
              </li>
              <li>
                <img src="img/top3.jpg" style='width:100%;' />
              </li>
              <li>
                <img src="img/top5.jpg" style='width:100%;' />
              </li>
              <li>
                <img src="img/top6.jpg" style='width:100%;' />
              </li>
            </ul>
         <!-- Timer and Play/Pause Button -->
        <div class="orbit-timer">
          <span></span>
          <div class="orbit-progress" style="-webkit-transition: width 10s linear;"></div>
        </div>
    </div>
    <!-- End Desktop Slider -->

    <!-- Mobile Header -->
    <div class="row">
      <div class="small-12 show-for-small"><br>
        <img src="img/top1.jpg" />
      </div>
    </div>
    <!-- End Mobile Header -->
  </div>

<br />

    <div class="row">
    <h4><a name="neuigkeiten">Neuigkeiten</a></h4>
    <div class="large-12 columns">
    <!-- Content -->
    <div class="row">
          <div class="panel radius">

          <div class="row">
            <div class="large-6 columns">
                <ul id="featured2" data-orbit data-options="timer_speed:5000;bullets:false;animation:fade;pause_on_hover:false;navigation_arrows:false;slide_number:false;">
                    
                      
                    <?php
                                    $query = mysql_query("SELECT * FROM News ORDER BY id DESC limit 10");
                                    $count = mysql_num_rows($query);

                                    while ($row = mysql_fetch_array($query))
                                    {
                                       
                                        ?>
                                                <li data-orbit-slide="headline-1">
                                                <h2> <?php echo $row[title];?>  </h2>
                                                <?php echo '<p>'.$row[text].'</p>'; ?>
                                                </li>
                                        <?
                                    }
                    ?>
                    
                </ul>
                
                

            </div>
            <div class="large-6 columns">
                   <ul class="pricing-table radius">
                      <li class="title">Öffnungszeiten</li>
                      <li class="price">Montag - Freitag: 8:30 - 18:30 </li>
                      <li class="price">Samstags: 9:30 - 14:00 </li>
                    </ul> 
            </div>
          </div>
        </div>
      </div>
    <!-- End Content -->

      </div>
    </div>

    <!-- Outfit of the month -->

<br />
<div class="row">
    <h4><a name="out_mon">Outfit das Monates</a></h4>
    <div class="large-12 columns">
      <div class="row">
          <div class="panel radius">
                <!-- Content -->
                <ul class="clearing-thumbs" data-clearing>

                  <?php
                                    $query = mysql_query("SELECT * FROM Outfit ORDER BY id ASC");
                                    $count = mysql_num_rows($query);

                                    while ($row = mysql_fetch_array($query))
                                    {
                                       
                                        ?>
                                                <li> <a href="<?php echo 'img/'.$row['image_name']; ?>"> <img src=<?php echo 'img/thumb/'.$row['image_name']; ?> width="200"/>
                                        <?
                                    }
                  ?>
                <!--<li><a href="img/01383508963.jpg"><img src="img/thumb/01383508963.jpg"></a></li> --> 
                </ul>
                <!-- End Content -->
          </div>
      </div>

      </div>
    </div>

    <!-- End utfit of the month -->

<br />
    <!-- Gallery -->
<div class="row hide-on-small">
    <h4><a name="galerie">Galerie</a></h4>
    <div class="large-12 columns">
      <div class="row">
          <div class="panel radius">
                <!-- Content -->
                <ul class="clearing-thumbs" data-clearing>

                  <?php
                                    $query = mysql_query("SELECT * FROM Gallery ORDER BY id ASC");
                                    $count = mysql_num_rows($query);

                                    while ($row = mysql_fetch_array($query))
                                    {
                                       
                                        ?>
                                                <li> <a href="<?php echo 'img/'.$row['image_name']; ?>"> <img src=<?php echo 'img/thumb/'.$row['image_name']; ?> width="100"/>
                                        <?
                                    }
                  ?>
                <!--<li><a href="img/01383508963.jpg"><img src="img/thumb/01383508963.jpg"></a></li> --> 
                </ul>
                <!-- End Content -->
          </div>
      </div>

      </div>
    </div>

    <!-- End Gallery-->
  

<br />
<div class="row hide-for-small">     
          <h4><a name="marken">Unsere Marken</a></h4>
          <div class="panel radius" id="marcas" data-section-content>
              <div class="row">
              <div class="large-12 columns">
              <!-- Thumbnails -->
              
                     <div class="small-2 small-2 columns">
                      <img src="brands/drykorn2.png" />         
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/mac.png" />
                 
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/marcopolo.png" />
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/opus.png" />
                  
                    </div>
                    <div class="small-2 small-2 columns">
                      <img src="brands/scod.png" />
                    
                    </div>
                   
                    <div class="small-2 small-2 columns">
                      <img src="brands/wellensteyn.png"/>
                    </div>
              <!-- End Thumbnails -->  
              </div>
              </div>
          </div>
</div>

<br />  
<div class="row">
          <h4><a name="contactos">Kontakte</a></h4>
          <div  class="panel radius">
            <div class="row">
                <div class="large-4 columns">

                  <ul class="vcard">
                    <li class="fn">Wildhardt women's wear Wiesbaden:</li>
                    <li class="street-address">Adresse: Poststrasse 22</li>
                    <li class="locality">65191 Wiesbaden </li>
                    <li class="locality">Telefon: <a href:"tel:0611 2048078">0611 2048078 </a> </li>
                  </ul>
                  <ul class="vcard">
                    <li class="fn">Wildhardt women's wear Wiesbaden:</li>
                    <li class="street-address">Adresse: Rathausstraße 47</li>
                    <li class="locality">65203 Wiesbaden </li>
                    <li class="locality">Telefon: <a href:"tel:0611 2048078">0611 2048078 </a> </li>
                  </ul>
                </div>

                    <div class="large-8 columns" data-section-content>
                    
                    <div id="google-map" style="height: 300px"></div>
                </div>
            </div>
          </div>
</div>

<br />
<div class="row hide-for-small">
          <h4><a name="social">Social</a></h4>
          <div id="social" class="panel radius">
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Wildhardt-womens-wear-Wiesbaden/314463841687" data-width="400" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
          </div>
</div>





    <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-12 columns">
            <h6 class="subheader left">&copy; Copyright 2013</h6><h6 class="subheader right">All trademarks and registered trademarks are the property of their respective owners.</h6>
        </div>
      </div>
    </div>
  </footer>

  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <!-- End Footer -->

</body>
</html>