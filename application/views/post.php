<?php 
	foreach ($artikel->result() as $post)
	{
 ?>
<a href="<?php echo base_url('article/post').'/'.$post->id; ?>"><h2><?php echo $post->title; ?></h2></a>
<em style="font-size:12px;">Di-posting pada <?php echo $post->time; ?> oleh <?php echo $post->author; ?>, </em>
<em style="font-size:12px;">Category : <a href="<?php echo base_url('article/category').'/'.$post->kategori; ?>" ><?php echo $post->kategori; ?></a></em>
<div class="artikel-page">
	<?php echo $post->content; ?>
</div>
<div class="row" style="padding-top:10px;">
	<div class="col-xs-9">
		<div style="float:left;">
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<div style="float:left;width:200px;">
			<div class="fb-like" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
	</div>
	<div class="col-xs-3" align="right"><a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#FBComment">add comment</a></div>
</div>

<!-- Modal -->
<div class="modal fade" id="FBComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Comments</h4>
      </div>
      <div class="modal-body">
        <div class="fb-comments" data-href="<?php echo base_url('article/post').'/'.$post->id; ?>" data-numposts="5" data-colorscheme="light"></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php } ?>