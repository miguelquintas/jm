
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
                    Home
                  </a>
                </h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
             <ul class="left">
                <li><a href="#sobrenos">Über uns</a></li>
                <li><a href="#contactos">Kontakte</a></li>
                <li><a href="#marcas">Unsere Marken</a></li>
              </ul>
              
              
            </section>
        </nav>
     
      </div> 
  <!-- End Navigation -->
  </div>    
</div>

<div class="row_full"> 
    <div class="large-12 columns hide-for-small">
    <h1> Willkommen zu Wilhardt Mode </h1>
    <!-- Desktop Slider -->
        <div class="preloader"></div>
         <ul id="featured1" data-orbit data-options="timer_speed:5000;bullets:false;">
              <li>
                <img src="img/top1.jpg" />
                <div class="orbit-caption">
                  Caption One. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
              </li>
              <li>
                <img src="img/top2.jpg" />
                <div class="orbit-caption">
                  Caption Two. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
              </li>
              <li>
                <img src="img/top3.jpg" />
                <div class="orbit-caption">
                  Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
              </li>
              <li>
                <img src="img/top4.jpg" />
                <div class="orbit-caption">
                  Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
              </li>
              <li>
                <img src="img/top5.jpg" />
                <div class="orbit-caption">
                  Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
              </li>
              <li>
                <img src="img/top6.jpg" />
                <div class="orbit-caption">
                  Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
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
 
  <br>


    <div class="row">
    <h4><a href="#neuigkeiten">Neuigkeiten</a></h4>
    <div class="large-12 columns">
    <div class="row">
    <!-- Content -->
          <div class="panel radius">

          <div class="row">
          <div class="large-6 columns">

            <h4>News</h4><hr/>
            <h5 class="subheader"> Wir Haben Sommer Verkauf ! </h5>
            <p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.
           
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
  

<div class="row hide-for-small">     
          <h4><a class="anchor" href="#marcas">Unsere Marken</a></h4>
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
<div class="row">
          <h4><a href="#contactos">Kontakte</a></h4>
          <div id="contactos" class="panel radius">
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

<div class="row hide-for-small">
          <h4><a href="#contactos">Social</a></h4>
          <div id="social" class="panel radius">
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Wildhardt-womens-wear-Wiesbaden/314463841687" data-width="400" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
          </div>
</div>





    <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-6 columns subheader">
          &copy; Copyright 2013
        </div>
        <div class="large-12 columns">
            <h6 class="subheader">All trademarks and registered trademarks are the property of their respective owners.</h6>
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
    google.maps.event.addDomListener(window, 'load', initialize);
    $(document).foundation();
  </script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit({ fluid: '2x1' });

    });
    
  </script>
  <!-- End Footer -->

</body>
</html>