<?php 
    $home_link = base_url();
    $portofolio_link = base_url('portfolio');
    $article_link = base_url('article');
    $about_link = base_url('about');
    $cyber_link = base_url('community/cyber');
    $game_link = base_url('community/game');
    $mobile_link = base_url('community/mobile');
    $web_link = base_url('community/web');
    if ($incl == "home"){
        $img_header = "whatsnew.png";
        $header_link = $home_link;
        $head_title = "Inkubator IT";
    }else if ($incl == "portfolio"){
        $img_header = "portfolio.png";
        $header_link = $portofolio_link;
        $head_title = "Inkubator IT | Portfolio";
    }else if (($incl == "article")||($incl=="post")){
        $img_header = "articles.png";
        $header_link = $article_link;
        if ($incl == "article"){
            $head_title = "Inkubator IT | Articles";
        }else{
            $head_title = "Inkubator IT | ".$artikel->row()->title;
        }
    }else if ($incl == "about"){
        $img_header = "aboutus.png";
        $header_link = $about_link;
        $head_title = "Inkubator IT | About Us";
    }else if ($incl == "cyber"){
        $img_header = "cyber_header.png";
        $header_link = $cyber_link;
        $head_title = "Inkubator IT | Komunitas Cyber";
    }else if ($incl == "game"){
        $img_header = "game_header.png";
        $header_link = $game_link;
        $head_title = "Inkubator IT | Komunitas Game";
    }else if ($incl == "mobile"){
        $img_header = "mobile_header.png";
        $header_link = $mobile_link;
        $head_title = "Inkubator IT | Komunitas Mobile";
    }else if ($incl == "web"){
        $img_header = "web_header.png";
        $header_link = $web_link;
        $head_title = "Inkubator IT | Komunitas Web";
    }
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet"/>

  </head>

  <body>
    
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url() ?>"><h4>Inkubator IT</h4></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li  class="active"><a href="#"> <img src="<?php echo base_url() ?>transbg/home.png" height="40px" width="40px"> Home</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="<?php echo base_url() ?>transbg/portofolio.png" height="40px" width="40px"> Portofolio</b></a>
              <ul class="dropdown-menu">
                  <li><a href="portofoliomobile.html"><img src="<?php echo base_url() ?>transbg/mobile.png" height="25px" width="25px">  Mobile</a></li>
                  <li><a href="portofoliogame.html"><img src="<?php echo base_url() ?>transbg/game.png" height="25px" width="25px">  Game</a></li>
                  <li><a href="portofolioweb.html"><img src="<?php echo base_url() ?>transbg/web.png" height="25px" width="25px">  Web</a></li>
                  <li><a href="portofoliocyber.html"><img src="<?php echo base_url() ?>transbg/cyber.png" height="25px" width="25px">  Cyber</a></li>
                </ul>
              </li>
              <li><a href="artikel.php"> <img src="<?php echo base_url() ?>transbg/artikel.png" height="40px" width="40px"> Artikel</a></li>
              <li><a href="aboutus.html"> <img src="<?php echo base_url() ?>transbg/aboutus.png" height="40px" width="40px"> Tentang Kami</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <?php $this->load->view($incl); ?>
    
    <div id="footer">
      <div class="container">
        <div class="row">
        <div class="span4">
          <ul class="unstyled">
            <li><h4 class="text-info">Karya Kami</h4></li>
            <li><a href="portofoliomobile.html"><h5>Mobile</h5></a></li>
            <li><a href="portofoliogame.html"><h5>Game</h5></a></li>
            <li><a href="portofolioweb.html"><h5>Web</h5></a></li>
            <li><a href="portofoliocyber.html"><h5>Cyber</h5></a></li>
          </ul>
        </div>
        <div class="span4">
          <ul class="unstyled">
            <li><h4 class="text-info">Departemen Kami</h4></li>
            <li><a href="aboutus.html"><h5>About Us</h5></a></li>
            <li><a href="artikel.php"><h5>Artikel</h5></a></li>
          </ul>
        </div>
        <div class="span2">
            <img src="<?php echo base_url() ?>img/HMIF.jpg" height="100px" width="120px">
            
        </div>
        <div class="span2">
          <img src="<?php echo base_url() ?>transbg/logoiit.png" height="100px" width="120px">
        </div>
        </div>
      </div>
      <hr>
      <div class="container">
      <p class="pull-right"><a href="#">Kembali ke Atas</a></p>
            <p>&copy; <a href="../admin/index.php" data-toggle="modal">2013 Azif, Inc.</a> <!--&middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>--></p></div>
    </div>

 
    
     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>