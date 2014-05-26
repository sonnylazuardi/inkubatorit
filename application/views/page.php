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
            $head_title = "Inkubator IT | ".$post->title;
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

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.rawgit.com/karacas/imgLiquid/master/js/imgLiquid-min.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">Inkubator IT</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>transbg/home.png" height="40px" width="40px"> Home</a></li>
            <li class="dropdown <?php if($this->uri->segment(1)=="portfolio"){echo "active";}?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="<?php echo base_url() ?>transbg/portofolio.png" height="40px" width="40px"> Portofolio</b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('portfolio/category/Mobile/any') ?>"><img src="<?php echo base_url() ?>transbg/mobile.png" height="25px" width="25px">  Mobile</a></li>
                    <li><a href="<?php echo site_url('portfolio/category/Game/any') ?>"><img src="<?php echo base_url() ?>transbg/game.png" height="25px" width="25px">  Game</a></li>
                    <li><a href="<?php echo site_url('portfolio/category/Web/any') ?>"><img src="<?php echo base_url() ?>transbg/web.png" height="25px" width="25px">  Web</a></li>
                    <li><a href="<?php echo site_url('portfolio/category/Cyber/any') ?>"><img src="<?php echo base_url() ?>transbg/cyber.png" height="25px" width="25px">  Cyber</a></li>
                </ul>
            </li>
            <li class="<?php if($this->uri->segment(1)=="article"){echo "active";}?>"><a href="<?php echo site_url('article') ?>"> <img src="<?php echo base_url() ?>transbg/artikel.png" height="40px" width="40px"> Artikel</a></li>
            <li class="<?php if($this->uri->segment(1)=="about"){echo "active";}?>"><a href="<?php echo site_url('about') ?>"> <img src="<?php echo base_url() ?>transbg/aboutus.png" height="40px" width="40px"> Tentang Kami</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <div class="content">
        <?php $this->load->view($incl); ?>
    </div>
    
    <div id="footer">
      <div class="container">
        <hr>
        <div class="row">
        <div class="col-sm-4">
          <ul class="unstyled">
            <li><h4 class="text-info">Karya Kami</h4></li>
            <li><a href="<?php echo site_url('portfolio/category/Mobile/any') ?>"><h5>Mobile</h5></a></li>
            <li><a href="<?php echo site_url('portfolio/category/Game/any') ?>"><h5>Game</h5></a></li>
            <li><a href="<?php echo site_url('portfolio/category/Web/any') ?>"><h5>Web</h5></a></li>
            <li><a href="<?php echo site_url('portfolio/category/Cyber/any') ?>"><h5>Cyber</h5></a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="unstyled">
            <li><h4 class="text-info">Departemen Kami</h4></li>
            <li><a href="<?php echo site_url('about') ?>"><h5>About Us</h5></a></li>
            <li><a href="<?php echo site_url('article') ?>"><h5>Artikel</h5></a></li>
          </ul>
        </div>
        <div class="col-sm-2">
            <img src="<?php echo base_url() ?>img/HMIF.jpg" height="100px" width="120px">
            
        </div>
        <div class="col-sm-2">
          <img src="<?php echo base_url() ?>transbg/logoiit.png" height="100px" width="120px">
        </div>
        </div>
      </div>
      <hr>
      <div class="container">
      <p class="pull-right"><a href="#">Kembali ke Atas</a></p>
            <p>&copy; <a href="#">2014 Team Website IIT.</a></p></div>
    </div>
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".img-wrapper").imgLiquid();
        });
    </script>
  
  </body>
</html>