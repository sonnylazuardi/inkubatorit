<?php 
	foreach ($port->result() as $post)
	{
 ?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo $post->title; ?></h4>
</div>
<div class="modal-body" style="height:500px;overflow:auto;">
    <div class="row" style="font-size:20px;">
    	<div class="col-xs-4">
    		<img src="<?php if ($post->image == "") echo base_url('img/portfolio_empty.png'); else echo $post->image; ?>" width="100%" height="200px">
    	</div>
    	<div class="col-xs-8">
	    	<div class="row">
	    		<div class="col-xs-7"><strong>Tahun Pembuatan</strong></div>
	    		<div class="col-xs-5">:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $post->tahun; ?></div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-7"><strong>Kategori</strong></div>
	    		<div class="col-xs-5">:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $post->kategori; ?></div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<strong>Developer :</strong>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<?php echo $post->developer; ?>
	    		</div>
	    	</div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    		<h3>Deskripsi Karya</h3>
    		<?php echo $post->deskripsi; ?>
    	</div>
    </div>
</div>
<?php } ?>