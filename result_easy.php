<?php
include("class/users.php");
$ans=new users;
?>
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
	
	<br>
	<br>
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<?php
$result=$ans->result_ans();
$query="truncate table answer";
		if($ans->noans($query))
		{
		
		}
if($result=="5")
{
	echo "Very Good";
}
elseif($result=="4")
{
	echo "Good";
}
elseif($result=="3")
{
	echo "OK";
}
elseif($result=="2")
{
	echo "Poor";
}
elseif($result=="1")
{
	echo "Very Poor";
}
else
{
	echo "very very poor";
}
?>
		
		</div>
		<div class="col-sm-2"></div>
	</div>		
	<footer  class="page-footer" style="margin-top:436px">
		<div >
			<center><p>- shalini joshi -</p></center>
		</div>
	</footer>

</body>
</html>
