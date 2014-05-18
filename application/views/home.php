<div class="row">
  <div class="col-sm-12" align="center">
    <div class="row" id="home-box">
      <div class="col-xs-6" align="center">
        <h3>New Products</h3>
        <div class="inner-home">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:100%;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height:100%;">
               <?php 
                $i = 1;
                foreach ($port->result() as $post){ 
              ?>
              <div class="item<?php if ($i==1) echo ' active'; ?>" style="height:100%;">
                <a href="#" onclick="get_port('<?php echo $post->id; ?>')"><img src="<?php if ($post->image == "") echo base_url('img/portfolio_empty.png'); else echo $post->image; ?>" witdh="100%" style="height:100%;"></a>
                <div class="carousel-caption" style="">
                  <a href="#" onclick="get_port('<?php echo $post->id; ?>')"><h3><?php if (strlen($post->title) <= 15) echo $post->title; else echo substr($post->title,0,13)."..."; ?></h3></a>
                </div>
              </div>
              <?php $i++; } ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
       <div class="col-xs-6" align="center">
        <h3>Latest Article</h3>
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