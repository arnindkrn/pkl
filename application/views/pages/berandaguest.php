<!DOCTYPE html>
<html lang="en">
<head>
<title>Telkom Infra</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-4.1.2/bootstrap.min.css')?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/responsive.css')?>">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">

</head>
<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header trans_400">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
            <div class="logo">
              <a href="#">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive-logo" height="50" width="170">
              </a>
            </div>
            <nav class="main_nav ml-auto mr-auto">
              <ul class="d-flex flex-row align-items-center justify-content-start">
              </ul>
            </nav>
            <div class="log_reg">
              <div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
                <div class="login log_reg_text"><a href="<?php echo base_url();?>Form">Masuk</a></div>
              </div>
            </div>
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Menu -->
  
  <div class="menu_overlay trans_400"></div>
  <div class="menu trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <nav class="menu_nav">
      <ul>
        <li><a href="<?php echo base_url();?>Form">Masuk</a></li>
      </ul>
    </nav>
  </div>

  <!-- Home -->

  <div class="home">
    <div class="home_background"></div>
    <div class="background_image background_city" style="background-image: url(<?php echo base_url('assets/img/bg1.jpg')?>); height: 100%; background-position: center center; background-repeat:no-repeat; background-attachment: fixed; background-size:  cover;"></div>

  </div>

  <!-- Intro -->

  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="col magic_fade_in">
          <div class="section_title text-center"><h2>Menu</h2></div>
        </div>
      </div>
      <div class="row intro_row">
        <div class="intro_dots magic_fade_in" style="background-image:url(images/dots.png)"></div>
        
        <!-- Intro Item -->
        <div class="col-lg-4 intro_col magic_fade_in">
          <a href="<?php echo base_url('Datalaptop')?>"><div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
            <div class="intro_icon"><img src="<?php echo base_url();?>assets/img/Laptop3.png"></div>
            </div>
            <div class="intro_item_content">
              <div class="intro_item_title">Daftar Laptop</div>
              <div class="intro_item_text">
              </div>
            </div>
          </div></a>
        </div>

        <!-- Intro Item -->
        <div class="col-lg-4 intro_col magic_fade_in">
           <a href="<?php echo base_url('Daftarpenyewa')?>"><div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
            <div class="intro_icon"><img src="<?php echo base_url();?>assets/img/form.png"></div>
            </div>
            <div class="intro_item_content">
              <div class="intro_item_title">Daftar Penyewa</div>
              <div class="intro_item_text">
              </div>
            </div>
          </div></a>
        </div>

        <!-- Intro Item -->
        <div class="col-lg-4 intro_col magic_fade_in">
            <a href="<?php echo base_url('Unduh')?>"><div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
            <div class="intro_icon"><img src="<?php echo base_url();?>assets/img/unduh.png"></div>
            </div>
            <div class="intro_item_content">
              <div class="intro_item_title">Unduh Form</div>
              <div class="intro_item_text">
              </div>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>
        <br>
        <br>
        <br>
        <footer class="sticky-footer" style="background-color: #F5F5F5; color: darkred">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © <a href="http://fmipa.unj.ac.id/siskom/">Ilmu Komputer 2015 UNJ </a> and Telkom Infra 2018</span>
            </div>
          </div>
        </footer>
</div>


<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-4.1.2/popper.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-4.1.2/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/progressbar/progressbar.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>