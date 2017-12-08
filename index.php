<!DOCTYPE html>
<html>
<head>
  <title>Online Quiz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="image/uu.jpg">
	<h1 style="Online Quiz">Online Quiz</h1>
	<div style="width:500px;padding:20px;margin-left:450px;margin-top:135px;padding-left:45px"  class="panel panel-default">
		<h3 style="">Sign In</h1>
		<?php 
			if(isset($_GET['run'])&& ($_GET['run'])=="failed!!")
			echo "Your email or password does not match!!";
		?>
		<form action="signin.php" method="post">
		  <div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="e" style="width:400px;" class="form-control" id="e">
		  </div>
		  <div class="form-group">
			<label for="pass">Password:</label>
			<input type="password" name="p" style="width:400px;" class="form-control" id="p">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		 
		</form>
		 <button type="submit" onclick="window.location.href='signup.php'" class="btn btn-default">Signup</button>
		
	</div>
</body> 
</html>
