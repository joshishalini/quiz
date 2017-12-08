<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycore.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav style="background-color:#173e43;" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:#fae596;" class="navbar-brand" href="#">Online Quiz</a>
    </div>
    
  </div>
</nav>
<h3>Sign Up Please</h3>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div style="padding:25px;" class="panel panel-default">
		<?php 
						if(isset($_GET['run'])&& $_GET['run']=="success")
						{
							echo "Your Sucessfully Registered!!";
						}
		?>
			<form role="form" method="post" action="signupsu.php" enctype="multipart/form-data">
							<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
								  <label for="pwd">Phone No:</label>
								  <input type="text" class="form-control" name="pn" id="pn" placeholder="Enter phone no">
							</div>
							<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
							<button type="submit" onclick="window.location.href='index.php'"  class="btn btn-default">Sign In</button>
			</form>
		</div>
	</div>
	<div class="col-sm-2"></div>
	</div>	
<footer  class="page-footer" style="margin-top:102px">
	<div >
		<center><p >- shalini joshi -</p></center>
    </div>
</footer>
</body>
</html>
