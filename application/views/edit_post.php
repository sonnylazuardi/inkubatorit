<?php foreach ($artikel->result() as $post) { ?>

<div class="container">
	<div class="row" id="form-posting">
		<form role="form" id="edit-post">
			<div class="form-group row">
				<div class="col-sm-6">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $post->title; ?>">
				</div>
				<div class="col-sm-3">
					<label for="image">Image Title</label>
	      			<div class="input-group">
					    <input type="text" id="image" name="image" class="form-control" placeholder="Image Title URL" value="<?php echo $post->image; ?>">
					    <span class="input-group-btn">
					    	<a href="<?php echo base_url('filemanager/dialog.php?type=1&field_id=image'); ?>" class="btn btn-default" type="button" id="iframe-btn"><span class="glyphicon glyphicon-folder-open"></span></a>
					    </span>
				    </div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6">
					<label for="author">Author</label>
					<input type="text" class="form-control" id="author" name="author" placeholder="Author" value="<?php echo $post->author; ?>">
				</div>
				<div class="col-sm-3">
					<label for="kategori">Kategori</label>
					<select class="form-control" id="kategori" name="kategori">
						<option value="">-- Kategori --</option>
						<option value="Web" <?php if ($post->kategori == 'Web') echo 'selected'; ?>>Web</option>
						<option value="Mobile" <?php if ($post->kategori == 'Mobile') echo 'selected'; ?>>Mobile</option>
						<option value="Game" <?php if ($post->kategori == 'Game') echo 'selected'; ?>>Game</option>
						<option value="Cyber" <?php if ($post->kategori == 'Cyber') echo 'selected'; ?>>Cyber</option>
						<option value="Event" <?php if ($post->kategori == 'Event') echo 'selected'; ?>>Event</option>
						<option value="Appreciation" <?php if ($post->kategori == 'Appreciation') echo 'selected'; ?>>Appreciation</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" class="form-control tinymce" rows="13"><?php echo $post->content; ?></textarea>
			</div>
			<div class="form-group row">
				<div class="col-xs-1">
					<button type="submit" class="btn btn-primary btn-lg">Save</button>
				</div>
				<div class="col-xs-1">
					<button type="button" class="btn btn-lg" onclick="window.location='<?php echo base_url('admin/article'); ?>'">Cancel</button>
				</div>
				<div class="col-xs-3" id="CallBack"></div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#edit-post").submit(function(){
			if (($("#title").val() != "")&&
				($("#author").val() != "")&&
				($("#kategori").val() != "")&&
				($("#content").val() != ""))
			{
				$.ajax({
					type	: "POST",
					url 	: "<?php echo base_url('ajax/edit_post').'/'.$post->id; ?>",
					data	: {
						title : $("#title").val(),
						image : $("#image").val(),
						author : $("#author").val(),
						kategori : $("#kategori").val(),
						content : $("#content").val()
					},
					success	: function(html){
						if (html == 'true'){
							$("#CallBack").html("<div class='alert alert-success'>Artikel berhasil di-posting</div>");
							window.location = "<?php echo base_url('admin/article'); ?>";
						}else{
							$("#CallBack").html("<div class='alert alert-danger'>Artikel gagal di-posting</div>");
						}
					},
					beforeSend : function(){
						$("#CallBack").delay(3000).html("<div class='alert alert-info'>Sedang memproses...</div>");
					}
				});
			}else{
				$("#CallBack").html("<div class='alert alert-danger'>Masih ada field yang kosong!</div>");
			}
			return false;
		});
	});
</script>
<?php } ?>
