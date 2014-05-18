<div id="kategori-artikel">
 	<a href="<?php echo base_url('article'); ?>"><span class="label label-<?php if ($kategori == 'all') echo 'info'; else echo 'default'; ?>">All</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Web"><span class="label label-<?php if ($kategori == 'Web') echo 'info'; else echo 'default'; ?>">Web</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Mobile"><span class="label label-<?php if ($kategori == 'Mobile') echo 'info'; else echo 'default'; ?>">Mobile</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Game"><span class="label label-<?php if ($kategori == 'Game') echo 'info'; else echo 'default'; ?>">Game</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Cyber"><span class="label label-<?php if ($kategori == 'Cyber') echo 'info'; else echo 'default'; ?>">Cyber</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Event"><span class="label label-<?php if ($kategori == 'Event') echo 'info'; else echo 'default'; ?>">Event</span></a>
	<a href="<?php echo base_url('article/category'); ?>/Appreciation"><span class="label label-<?php if ($kategori == 'Appreciation') echo 'info'; else echo 'default'; ?>">Appreciation</span></a>
 </div>
<?php
if ($artikel->num_rows() > 0){ 
	foreach ($artikel->result() as $post)
	{
 ?>

<div class="row post-list">
	<div class="img-post visible-sm visible-lg">
		<a href="<?php echo base_url('article/post')."/".$post->id; ?>" ><img src="<?php if ($post->image == "") echo base_url('img/article_empty.png'); else echo $post->image; ?>" width="100%" height="90%"></a>
	</div>
	<div class="post">
		<a href="<?php echo base_url('article/post')."/".$post->id; ?>" ><h2><?php echo $post->title; ?></h2></a>
		<p><?php echo substr(strip_tags($post->content),0,250)."...."; ?></p>
		<div class="time">
			<em>Di-posting pada <?php echo $post->time; ?> oleh <?php echo $post->author; ?></em><br>
			<em>Category : <a href="<?php echo base_url('article/category').'/'.$post->kategori; ?>"><?php echo $post->kategori; ?></a></em>
		</div>
		<div align="right">
			<a href="<?php echo base_url('article/post')."/".$post->id; ?>" class="btn btn-primary btn-sm">read more..</a>
		</div>
	</div>
</div>
<?php }}else{ ?>
<h3><em>Sorry content is not available</em></h3>
<?php } ?>
<div class="row" id="nav-post">
	<div class="col-xs-6" align="left">
		<?php 
		if ($kategori == 'all'){
			if ($new_exist){ 
		?>
		<a href="<?php echo base_url('article/page')."/".($page-1); ?>"><span class="glyphicon glyphicon-arrow-left"></span> <strong>Newer Post</strong></a>
		<?php }}else{ if ($new_exist){ ?>
		<a href="<?php echo base_url('article/category')."/".$kategori."/".($page-1); ?>"><span class="glyphicon glyphicon-arrow-left"></span> <strong>Newer Post</strong></a>
		<?php }} ?>
	</div>
	<div class="col-xs-6" align="right">
		<?php 
		if ($kategori == 'all'){
			if ($old_exist){ 
		?>
		<a href="<?php echo base_url('article/page')."/".($page+1); ?>"><strong>Older Post</strong> <span class="glyphicon glyphicon-arrow-right"></span></a>
		<?php }}else{ if ($old_exist){ ?>
		<a href="<?php echo base_url('article/category')."/".$kategori."/".($page+1); ?>"><strong>Older Post</strong> <span class="glyphicon glyphicon-arrow-right"></span></a>
		<?php }} ?>
	</div>
</div>