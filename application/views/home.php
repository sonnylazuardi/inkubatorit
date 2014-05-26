<div id="carousel-header" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-header" data-slide-to="1"></li>
    <li data-target="#carousel-header" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <div class="img-wrapper">
        <img src="<?php echo base_url() ?>img/bghaha.jpg" alt="">
      </div>
      <div class="container">
        <div class="carousel-caption caption">
          <h1>Siapakah Kami?</h1>
          <p class="lead">Sebuah departemen kecil yang akan menjadi Solusi IT Anda. . . </p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-wrapper">
        <img src="<?php echo base_url() ?>img/pro1.jpg" alt="">
      </div>
      <div class="container">
        <div class="carousel-caption caption">
          <h1>Alasan #1</h1>
          <p class="lead">Sumber daya kami yang kompetitif akan selalu memberikan hasil yang lebih baik</p>
          <!--<a class="btn btn-large btn-primary" href="portofolio.html">Our Works</a>-->
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-wrapper">
        <img src="<?php echo base_url() ?>img/Ccre1.jpg" alt="">
      </div>
      <div class="container">
        <div class="carousel-caption caption">
          <h1>Alasan #2</h1>
          <p class="lead">Sumber daya kami yang kreatif akan selalu memberikan inovasi terbaru</p>
          <!--<a class="btn btn-large btn-danger" href="artikel.php">Read It</a>-->
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-wrapper">
        <img src="<?php echo base_url() ?>img/Ctech1.jpg" alt="">
      </div>
      <div class="container">
        <div class="carousel-caption caption">
          <h1>Alasan #3</h1>
          <p class="lead">Teknologi terkini untuk pengerjaan karya kami</p>
          <!--<a class="btn btn-large btn-warning" href="aboutus.html">Your IT Solution</a>-->
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-wrapper">
        <img src="<?php echo base_url() ?>img/Ccomuni.jpg" alt="">
      </div>
      <div class="container">
        <div class="carousel-caption caption">
          <h1>Alasan #4</h1>
          <p class="lead">Jangan sungkan untuk mengutarakan keluhan Anda dengan hasil kami</p>
          <!--<a class="btn btn-large btn-warning" href="aboutus.html">Your IT Solution</a>-->
        </div>
      </div>
    </div>
  </div>
   <!-- Controls -->
  <a class="left carousel-control" href="#carousel-header" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-header" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->
<div class="container">
  <div class="row">
    <div class="col-sm-12" align="center">
      <div class="row" id="home-box">
        <div class="col-xs-6" align="center">
          <h2>Karya Terbaru</h2>
          <hr>
          <div class="inner-home">
            <div id="carousel-product" class="carousel slide" data-ride="carousel" style="height:400px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-product" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-product" data-slide-to="1"></li>
                <li data-target="#carousel-product" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" style="height:100%;">
                 <?php 
                  $i = 1;
                  foreach ($port->result() as $post){ 
                ?>
                <div class="item<?php if ($i==1) echo ' active'; ?>" style="height:100%;">
                  <div class="img-wrapper">
                    <a href="#" onclick="get_port('<?php echo $post->id; ?>')"><img src="<?php if ($post->image == "") echo base_url('img/portfolio_empty.png'); else echo $post->image; ?>"></a>
                  </div>
                  <div class="carousel-caption" style="">
                    <a href="#" onclick="get_port('<?php echo $post->id; ?>')"><h3><?php if (strlen($post->title) <= 15) echo $post->title; else echo substr($post->title,0,13)."..."; ?></h3></a>
                  </div>
                </div>
                <?php $i++; } ?>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-product" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-product" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
         <div class="col-xs-6" align="center">
          <h2>Artikel Terkini</h2>
          <hr>
          <?php 
              foreach ($artikel->result() as $post) {
             ?>
          <div class="inner-home">
            <div id="home-artikel">
              <div id="img-home">
                <a href="<?php echo base_url('article/post')."/".$post->id; ?>"><img src="<?php if ($post->image == "") echo base_url('img/article_empty.png'); else echo $post->image; ?>" width="100%" height="100%"></a>
              </div>
              <div align="left">
                <a href="<?php echo base_url('article/post')."/".$post->id; ?>"><h4><?php if (strlen($post->title) <= 25) echo $post->title; else echo substr($post->title,0,20)."..."; ?></h4></a>
              </div>
              <div align="left">
                <p><?php echo substr(strip_tags($post->content),0,200)."...."; ?></p>
              </div>
              <div align="right">
                <a href="<?php echo base_url('article/post')."/".$post->id; ?>" class="btn btn-primary btn-xs">read more</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="container marketing">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-3">
      <img class="img-circle" src="transbg/mobile.png" height="200px" width="200px">
    <h2 class="featurette-heading info-text">Komunitas <span class="text-info">Mobile</span></h2>
    <p class="collapse2">
      Komunitas mobile adalah komunitas dalam Inkubator IT beranggotakan pengembang perangkat lunak yang memiliki minat dalam pengembangan aplikasi mobile. Kami memiliki ketertarikan dalam mengembangkan aplikasi pada smartphone seperti iPhone, Android, BlackBerry dan Windows Phone 7, pada tablet seperti iPad, Tablet Android dan Playbook, serta pada featured phone seperti Symbian. Aplikasi yang dikembangkan sendiri sering dibagi menjadi tiga yaitu game, aplikasi sederhana dan sistem.
      <hr>
    </p>
    </div><!-- /.span4 -->
    <div class="col-md-3">
      <img class="img-circle" src="transbg/game.png" height="200px" width="200px">
      <h2 class="featurette-heading">Komunitas<span class="muted"> Game</span></h2>
    <p class="collapse2">
      Komunitas Game adalah komunitas di Inkubator IT yang anggota-anggotanya sangat antusias akan segala aspek yang terdapat dalam game, seperti gameplay, plot cerita, grafis
    ,karakter dan lain sebagainya. Para anggotanya memiliki skill yang mumpuni dalam pengaplikasian Object Oriented Programming.
    <hr>
    </p>
    </div><!-- /.span4 -->
    <div class="col-md-3">
      <img class="img-circle" src="transbg/web.png" height="200px" width="200px">
      <h2 class="featurette-heading">Komunitas <span class="text-error">Web</span></h2>
    <p class="collapse2">
      Komunitas web adalah salah satu dari sekian banyak komunitas yang berada dibawah naungan IIT. Komunitas web adalah tempat dimana mahasiswa informatika dan sistem teknologi informasi ITB berkumpul untuk saling berbagi ilmu dan informasi terbaru tentang dunia web. Pada komunitas ini para anggotanya akan dituntun untuk dapat menjadi seorang desainer web seutuhnya. Selain berbagi ilmu dan informasi tentang dunia web, komunitas ini juga sering mendapatkan proyek yang berhubungan dengan dunia web. Proyek ini membantu para anggota komunitas untuk mengaplikasikan ilmu tentang pemrograman web serta sebagai ajang aktualisasi diri para anggota komunitas web.
      <hr>
      </p>
    </div><!-- /.span4 -->
    <div class="col-md-3">
      <img class="img-circle" src="transbg/cyber.png" height="200px" width="200px">
      <h2 class="featurette-heading">Komunitas <span class="text-warning">Cyber</span></h2>
    <p class="collapse2">
      Komunitas terbaru di Inkubator IT. Anggota-anggotanya dikenal sebagai individu yang handal dalam masalah peretasan software maupun website. Kemampuan mereka tentu digunakan untuk hal yang
      membangun di Inkubator IT ini demi menjaga keamanan suatu karya kami dari peretas eksternal.
      <hr>
    </p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>

<div class="modal fade" id="port-single" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="port-box">
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
  function get_port(id)
  {
    var url = "<?php echo base_url('ajax/get_port'); ?>/" + id;
    $('#port-box').load(url);
    $('#port-single').modal('show');
  }
</script>

<div class="cons">
  <div class="container featurette">
    <img class="featurette-image pull-right" src="img/smile2.png" height="250px" width="250px">
    <h2 class="featurette-heading"><span class="muted"></span></h2>
    <blockquote class="pull-right">
      <h4>"Inkubator IT telah meghasilkan karya yang memuaskan dari segala aspek yang saya inginkan."
      </h4>
      <em>Klien Kami</em>
    </blockquote>
  </div>
</div>