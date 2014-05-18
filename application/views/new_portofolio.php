

<div class="container">
	<div class="row" id="form-portofolio">
		<form role="form" id="new-portofolio">
			<div class="form-group row">
				<div class="col-sm-6">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Title">
				</div>
				<div class="col-sm-3">
					<label for="image">Image Title</label>
	      			<div class="input-group">
					    <input type="text" id="image" name="image" class="form-control" placeholder="Image Title URL">
					    <span class="input-group-btn">
					    	<a href="<?php echo base_url('filemanager/dialog.php?type=1&field_id=image'); ?>" class="btn btn-default" type="button" id="iframe-btn"><span class="glyphicon glyphicon-folder-open"></span></a>
					    </span>
				    </div>
				</div>
				
			</div>
			<div class="form-group row">
				<div class="col-sm-6">
					<label for="developer">Developer</label>
					<textarea  class="form-control tinymce-simple" id="developer" rows="4"></textarea>	
				</div>
				<div class="col-sm-3">
					<label for="tahun">Tahun Pengerjaan</label>
					<select class="form-control" id="tahun" name="tahun">
						<option value="">-- Tahun Pengerjaan --</option>
						<?php 
						$thn = 2005;
						while ($thn <= date('Y')){
						 ?>
						<option value="<?php echo $thn ?>"><?php echo $thn ?></option>
						<?php $thn++; } ?>
					</select>
					<label for="kategori">Kategori</label>
					<select class="form-control" id="kategori" name="kategori">
						<option value="">-- Kategori --</option>
						<option value="Web">Web</option>
						<option value="Mobile">Mobile</option>
						<option value="Game">Game</option>
						<option value="Cyber">Cyber</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi</label>
				<textarea name="deskripsi" id="deskripsi" class="form-control tinymce" rows="13"></textarea>
			</div>
			<div class="form-group row">
				<div class="col-sm-1">
					<button type="submit" class="btn btn-lg">Publish</button>
				</div>
				<div class="col-sm-3" id="CallBack"></div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#new-portofolio").submit(function(){
			if (($("#title").val() != "")&&
				($("#developer").val() != "")&&
				($("#tahun").val() != "")&&
				($("#kategori").val() != "")&&
				($("#content").val() != ""))
			{
				$.ajax({
					type	: "POST",
					url 	: "<?php echo base_url('ajax/new_portofolio'); ?>",
					data	: {
						title : $("#title").val(),
						image : $("#image").val(),
						developer : $("#developer").val(),
						tahun : $("#tahun").val(),
						kategori : $("#kategori").val(),
						deskripsi : $("#deskripsi").val()
					},
					success	: function(html){
						if (html == 'true'){
							$("#CallBack").html("<div class='alert alert-success'>Portofolio berhasil di-posting</div>");
							window.location = "<?php echo base_url('admin/portfolio'); ?>";
						}else{
							$("#CallBack").html("<div class='alert alert-danger'>Portofolio gagal di-posting</div>");
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
