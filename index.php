
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
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=179139395446653";
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
              <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
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
    </div>
    <!-- End Navigation -->

    
  </div>


  <div class="row">
    <div class="large-12 columns">

    <!-- Desktop Slider -->
      <div class="hide-for-small">
        <div id="featured" data-orbit>
              <img src="img/top1.jpg" alt="BlaBlaBLa">
              <img src="img/top2.jpg" alt="slide image">
              <img src="img/top3.jpg" alt="slide image">
       
        </div>
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
  </div>
  <br>


  <div class="row">
    <div class="large-12 columns">
      <div class="row">

    <!-- Content -->

        <div class="large-8 columns">
          <div class="panel radius">

          <div class="row">
          <div class="large-6 small-6 columns">

            <h4>News</h4><hr/>
            <h5 class="subheader"> Wir Haben Sommer Verkauf ! 
            </h5>
          <div class="show-for-small" align="center">
            <a href="#" class="small radius button">Call To Action!</a><br>

            <a href="#" class="small radius button">Call To Action!</a>
          </div>

          </div>
          <div class="large-6 small-6 columns">
            <p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.
          </p>
        </div>

        </div>
        </div>
        </div>

        <div class="large-4 columns">
          <ul class="pricing-table radius">
            <li class="title">Öffnungszeiten</li>
            <li class="price">Mo - Fr: 8:30 - 18:30. </li>
            <li class="price">Sa: 9:30 - 14:00. </li>
          </ul>  
        </div>

    <!-- End Content -->

      </div>
    </div>
  </div>

<div class="row hide-for-small">     
          <h4><a href="#marcas">Unsere Marken</a></h4>
          <div id="marcas"class="panel radius" data-section-content>
              <div class="row">
              <div class="small-12 columns">
              <!-- Thumbnails -->
              
                     <div class="small-2 small-2 columns">
                      <img src="brands/drykorn.jpeg" />         
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/mac.gif" />
                 
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/marcopolo.png" />
                    </div>

                     <div class="small-2 small-2 columns">
                      <img src="brands/opus.png" />
                  
                    </div>
                    <div class="small-2 small-2 columns">
                      <img src="brands/scod.gif" />
                    
                    </div>
                    <div class="small-2 small-2 columns">
                      <img src="brands/streeone.png"/>
                      
                    </div>
                    <div class="small-2 small-2 columns">
                      <img src="brands/tamaris.jpeg"/>
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
                    <li class="locality">Telefon: 0611 2048078 </li>
                  </ul>
                  <ul class="vcard">
                    <li class="fn">Wildhardt women's wear Wiesbaden:</li>
                    <li class="street-address">Adresse: Rathausstraße 47</li>
                    <li class="locality">65203 Wiesbaden </li>
                    <li class="locality">Telefon: 0611 2048078 </li>
                  </ul>
                </div>

                    <div class="large-8 columns" data-section-content>
                    
                    <div id="google-map" style="height: 300px"></div>
                </div>
            </div>
          </div>
</div>

<div class="row">
          <h4><a href="#contactos">Social</a></h4>
          <div id="contactos" class="panel radius">
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Wildhardt-womens-wear-Wiesbaden/314463841687" data-width="400px" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
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