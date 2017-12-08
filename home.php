<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/mycore.css" >
</head>
<body> 
<br>
<br>
<nav style="background-color:#173e43;margin-top:-40px;" class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a style="color:#fae596;" class="navbar-brand" href="#">Online Quiz</a>
		</div>
	  </div>
	</nav>
	<br>
	<br>
	<div class="container">
	<div class="panel panel-info">
				<div class="panel-heading" >Instruction</div>
					<pre>Please read all the instructions very carefully.
1) It's compulsory to attempt all the questions.
2) You will have only 30 sec for answering the question.
3) There will be no negative marking done for any answer found to be wrong.
4)By clicking on start button means you are ready for the test.
5)As soon as you will click start or next button timer of 30 sec will start.

ALL THE VERY BEST FOR YOUR TEST</pre>

				</div>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4" >
			 
			<center><button type="button" onClick="window.location.href='easy.php'" class="btn btn-success">Easy</button></center>	
			</div>
			<div class="col-sm-4" >
			 
			<center><button type="button" onClick="window.location.href='medium.php'" class="btn btn-success">Medium</button>	</center>	
			</div>
			<div class="col-sm-4" >
			<center> <button type="button" onClick="window.location.href='hard.php'" class="btn btn-success">Hard</button>	</center>	
			</div>
			
		</div>
	</div>
	<footer  class="page-footer" style="margin-top:188px">
		<div >
			<center><p>- shalini joshi -</p></center>
		</div>
	</footer>
</body>
</html>
