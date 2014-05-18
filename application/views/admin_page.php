<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url('img/logo-iit.png'); ?>">
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('admin-style.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('fancybox/jquery.fancybox-1.3.4.css'); ?>" rel="stylesheet" media="screen">
	<script src="<?php echo base_url('jquery-2.0.3.min.js'); ?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript" ></script>
	<script type="text/javascript" src="<?php echo base_url('jquery-1.4.1.min.js'); ?>"> </script>
	<script src="<?php echo base_url('fancybox/jquery.fancybox-1.3.4.pack.js'); ?>"></script>
	<script src="<?php echo base_url('tinymce/jquery.tinymce.min.js'); ?>"></script>
	<script src="<?php echo base_url('tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	        $('.tinymce').tinymce({
	            theme : "modern",
	            menubar : true,
				plugins: [
			        "code advlist autolink link image lists charmap preview hr anchor pagebreak",
			        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking fullscreen",
			        "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
			   	],

    			toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    			relative_urls : false,
    			image_advtab: true,
    			browser_spellcheck : true ,
    			external_filemanager_path:"<?php echo base_url('filemanager') ?>/", 
				filemanager_title:"Filemanager" , 
				external_plugins: { "filemanager" : "<?php echo base_url('tinymce/plugins/responsivefilemanager/plugin.min.js') ?>"},
	        });
	        $('.tinymce-simple').tinymce({
	            theme : "modern",
	            menubar : false,
				plugins: [
			        "code advlist autolink link image lists charmap preview hr anchor pagebreak",
			        "searchreplace visualblocks visualchars insertdatetime media nonbreaking fullscreen",
			   	],
    			toolbar: false,
    			statusbar : false
	        });
	         $('#iframe-btn').fancybox({	
				'width'		: 900,
				'height'	: 600,
				'type'		: 'iframe',
		        'autoScale'    	: false
		    });
	    });
	</script>
	<title>Administrator - Inkubator IT</title>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
	    		</button>
	    		<a class="navbar-brand" href="<?php echo base_url(); ?>" target="_blank">Inkubator IT</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar">
					<li class="<?php if ($content == 'admin_main') echo "active"; ?>" ><a href="<?php echo base_url('admin/main') ?>" >Home</a></li>
					<li class="dropdown <?php if (($content == 'new_post')||($content == 'article_list')||($content == 'edit_post')) echo "active"; ?>">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Article <b class="caret"></b></a>
			            <ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('admin/article'); ?>">Post List</a></li>
				            <li><a href="<?php echo base_url('admin/new_post'); ?>">Add New Post</a></li>
			            </ul>
            		</li>
            		<li class="dropdown <?php if (($content == 'new_portofolio')||($content == 'portfolio_list')||($content == 'edit_port')) echo "active"; ?>">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portofolio <b class="caret"></b></a>
			            <ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('admin/portfolio'); ?>">Portofolio List</a></li>
				            <li><a href="<?php echo base_url('admin/new_portfolio'); ?>">Add New Portofolio</a></li>
			            </ul>
            		</li>
            		<li class="<?php if ($content == 'file_manager') echo "active"; ?>"><a href="<?php echo base_url('admin/file'); ?>">File Manager</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown <?php if ($content == 'change_pass') echo "active"; ?>">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
			            <ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('admin/change'); ?>">Change username & password</a></li>
				            <li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
			            </ul>
            		</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php
		$this->load->view($content);
	?>
</body>
</html>