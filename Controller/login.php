<?php  
require "../View/header.php"
?>

<!DOCTYPE html>
<body>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="post" action="../Model/action2.php">
			<h2>Please Login <small></small></h2>
			<hr class="colorgraph">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="7" required>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="register.php" class="btn btn-success btn-block btn-lg">Need an Account?</a></div>
			</div>
		</form>
	</div>
</div>