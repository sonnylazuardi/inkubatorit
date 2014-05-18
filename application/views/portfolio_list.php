<div class="container" align="center">
	<h3>--- Portfolio List ---</h3>
	<div class="row">
		<div class="col-md-offset-2 col-md-8" id="post-list">
			<table class="table table-hover">
				<thead>
					<tr>
						<th width="300px">Title</th>
						<th>Kategori</th>
						<th>Tahun</th>
						<th align="center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($port->result() as $post) {
					 ?>
					<tr>
						<td><?php echo $post->title; ?></td>
						<td><?php echo $post->kategori; ?></td>
						<td><?php echo $post->tahun; ?></td>
						<td align="center">
							<a href="<?php echo base_url('admin/edit_portfolio')."/".$post->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
							&nbsp
							<a href="#" onclick="del_port('<?php echo $post->id; ?>')"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>

			</table>
			<div class="row">
				<div class="col-xs-6" align="left">
					<?php if($new_exist){ ?>
					<a href="<?php echo base_url('admin/article').'/'.($page-1); ?>"><span class="glyphicon glyphicon-arrow-left"></span> previous</a>
					<?php } ?>
				</div>
				<div class="col-xs-6" align="right">
					<?php if($old_exist){ ?>
					<a href="<?php echo base_url('admin/article').'/'.($page+1); ?>">next <span class="glyphicon glyphicon-arrow-right"></span></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function del_port(id)
	{
		if (confirm("Anda yakin untuk menghapus?")){
				var url = "<?php echo base_url('ajax/del_port') ?>/"+id;
				$.ajax({
					type	: "POST",
					url 	: url,
					data	: {
						
					},
					success	: function(html){
						if (html == 'true'){
							location.reload();
						}else{
							alert("Gagal menghapus!");
						}
					},
				});
		}
	}
</script>
