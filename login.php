<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>demo-login</title>
</head>
<body>
<!-- process data -->
<?php
	$err = "";
	$username = $password = "";
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["username"])||empty($_POST["password"])){
			$err = "error: username and password should not be empty";
		}else{
			$username = $_POST["username"];
			$password = $_POST["password"];
			include 'user_confirm.php';
		}
	}
?>
<!-- page body -->
<h1 class="text-center">Login</h1>
<br>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Username</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-3 control-label">Password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="password" placeholder="Password">
			<p class="text-danger"><?php echo $err ?></p>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-7">
			<button type="submit" class="btn btn-default">Log in</button>
			<a class="btn btn-default" href="/demo/signup.php">Sign up</a>
		</div>
	</div>
</form>
</body>
<footer>
</footer>
</html>