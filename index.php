
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
  

  <!-- Google font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
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
                <li><a href="#">Über uns</a></li>
                <li><a href="#">Kontakte</a></li>
                <li><a href="#">Unsere Marken</a></li>
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
          <ul class="pricing-table">
            <li class="title">Öffnungszeiten</li>
            <li class="price">Mo - Fr: 8:30 - 18:30. </li>
            <li class="price">Sa: 9:30 - 14:00. </li>
          </ul>

        </div>

    <!-- End Content -->

      </div>
    </div>
  </div>


<!-- contacts  -->
<div class="section-container auto" data-section>
        <section>
          <p class="title" data-section-title><a href="#panel1">Kontakte</a></p>
          <div class="content" data-section-content>
             
             <div id="map-canvas"></div>
          </div>
        </section>
</div> 
<!-- End Contacts -->



<div class="section-container auto" data-section>
        <section>
          <p class="title" data-section-title><a href="#panel1">Unsere Marken</a></p>
          <div class="content" data-section-content>
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
        </section>
</div>  




    <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
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
  </script>
  <script type="text/javascript">

    $(window).load(function() {
      $('#featured').orbit({ fluid: '2x1' });

    });
  </script>
  <!-- End Footer -->

</body>
</html>