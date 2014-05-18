<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('admin-style.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('jquery-2.0.3.min.js'); ?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript" ></script>
	<script type="text/javascript" >
		$(document).ready(function(){
			$("#username").focus();
			$("#login_form").submit(function(){
				user = $("#username").val();
				pass = $("#password").val();
				$.ajax({
					type	: "POST",
					url 	: "<?php echo base_url('ajax/login'); ?>",
					data	: {
						username : user,
						password : pass
					},
					success	: function(html){
						if (html == 'true'){
							$("#CallBack").html("<div class='alert alert-success'>Success! Redirect to admin page...</div>");
							window.location = "<?php echo base_url('admin/main'); ?>";
						}else{
							$("#CallBack").html("<div class='alert alert-danger'>Username atau Password salah!</div>");
						}
					},
					beforeSend : function(){
						$("#CallBack").delay(3000).html("<div class='alert alert-info'>Logging in...</div>");
					}
				});
				return false;
			});
		});
	</script>
	<title>Inkubator IT - Login</title>
</head>
<body>
	<div class="container">
		<div class="row" id="area">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form class="form-horizontal" role="form" id="login_form">
					<div class="form-group" align="center">
						<img src="<?php echo base_url('img/logo-iit.png'); ?>">
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Username</label>
    					<div class="col-sm-8">
      						<input type="text" name="username" class="form-control" id="username" placeholder="Username">
    					</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
    					<div class="col-sm-8">
      						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
    					</div>
					</div>
					<div class="form-group">
    					<div class="col-sm-offset-3 col-sm-2">
      						<button type="submit" class="btn btn-default btn-lg">Sign in</button>
    					</div>
    					<div class="col-sm-6" id="CallBack">
    						
    					</div>
  					</div>

				</form>

			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>