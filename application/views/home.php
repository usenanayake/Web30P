
<?php include 'header.php'; ?>

<body id="page-top">

           <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background: #1a0d00;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Live with carvings</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/RegisterUser') ?>" style="font-size: 15px;">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Users/Login') ?>" style="font-size: 15px;">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/questions') ?>" style="font-size: 15px;">Questions</a>
            </li> -->
          </ul>
        </div>
      </div>
      <!-- <a href="<?php echo site_url('Register/RegisterUser') ?>"><button style="margin-right: 5%">Signup</button></a>
      <a href="<?php echo site_url('Users/Login') ?>"><button style="margin-right: 5%">Login</button></a> -->
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading" style="background:no-repeat; opacity: 100%;height: 50%"><font color="#1a0d00" style="font-size: 80px; ">විශ්මිත ලී කැටයම්</font></h1>
          <h2><font color="#331100" style="font-size: 60px;">Welcome To Carvings!!</font></h2>
          <hr>
          <p style="background-color: #ac7339; border-radius: 20px;"><font color="#000000" style="font-size: 20px;">We strive to make each piece have its own character.
The natural beauty of the wood makes that possible.</font></p>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About Us</h2>
            <hr class="light">
            <p class="text-faded"><h2>
              <font color="#1a0d00">
              <b>
              <?php
                foreach ($aboutview as $row)
                {
              ?>
                
                  <?php echo $row->about_description;?>
                
              <?php }
              ?>
            </b>
          </font>
            </h2>
            </p>

          </div>
          <br><br>
          <div class="col-lg-8 mx-auto">
            <h2 class="section-heading text-white text-center">Achivements</h2>
            <hr class="light">
            <p class="text-faded"><h4>
              <font color="#1a0d00">
                <b>
              <?php
                foreach ($achivementview as $row)
                {
              ?>
                <ul>
                  <li><?php echo $row->achivement_Description;?></li>
                </ul>
              <?php }
              ?>
            </b>
            </font>
            </h4>
            </p>
            

          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <a href="<?php echo site_url('Register/RegisterUser') ?>" style="text-decoration: none;">
              <div class="service-box">
                <i class="fa fa-4x fa-shopping-cart text-primary sr-icons" ></i>
                <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/RegisterUser') ?>" style="font-size: 15px;"><h3>Shop Now</h3></a>
                <!-- <p class="text-muted">Our templates are updated regularly so they don't break.</p> -->
              </div>
            </a>
          </div>
          <!-- <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Ready to Ship</h3>
              <p class="text-muted">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div> -->
          <div class="col-lg-6 col-md-6 text-center">
            <a href="<?php echo site_url('Message') ?>" style="text-decoration: none;">
              <div class="service-box">
                <i class="fa fa-4x fa-comments text-primary sr-icons"></i>
                <!-- <a href="<?php echo site_url('Message')?>"><button type="button" class="btn btn-primary">want to know something</button></a> -->
                <h3>Message</h3>

                </div>
               
                <!-- <p class="text-muted">You have to make your websites with love these days!</p> -->
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- <div align="center">
      <a href="<?php echo site_url('product') ?>"><button type="button" class="btn btn-primary">Home</button></a>
    </div> -->

    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          
          <?php
                      foreach ($galleryview as $row)
                      {
                    ?>  
                      <table>
                        <tr>
                        <td><img src="<?php echo base_url().'images/'.$row->image; ?>" height="500" width="631"></td></tr>
                        <tr><td align="center"><?php echo $row->image_Category;?></td>
                        </tr>
                      </table>
                    <?php }
                    ?>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact Us</h2>
            <hr class="primary">
            <p>Send your order, we </p>

            <!-- <h2>Visit Us</h2>

        <div id="googleMap" style="width:100%;height:400px;"></div>

      <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(5.9732424,80.4392553),
    zoom:16,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpZcBPdyjshNZIbGFzzxncnr4DSa667iY&callback=myMap"></script> -->
    <h2>Visit Us</h2>

     <div id="googleMap" style="width:100%;height:400px;"></div>

      <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(6.0386863,80.6241344),
    zoom:16,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker = new google.maps.Marker({
          position: {lat: 6.0386863, lng: 80.6241344},
          map: map,
          title: 'Wishmitha lee ketayam'});
    }
    
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpZcBPdyjshNZIbGFzzxncnr4DSa667iY&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>077-9954161</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a>kodithuwakku3891@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>template/js/creative.min.js"></script>

  </body>

</html>
