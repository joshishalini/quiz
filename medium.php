<?php
include("class/users.php");
	$que=new users;
	if(isset($_GET['run'])&& $_GET['run']=="success")
						{
							$id=$_SESSION['id'];
							$que->que_show_medium($id);	
						}
	else
	{
		$i=1;
		$que->que_show_medium($i);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycore.css">
  <script type="text/javascript"> 
  function timeout()
  {
	  
	  var second=timeLeft%30;
	  if(timeLeft<=0)
	  {
		  clearTimeout(tm);
		  document.getElementById("form1").submit();
	  }  
	  else
	  {
		
		   document.getElementById("time").innerHTML=second;
	  }
	  timeLeft--;
	  var tm = setTimeout(function(){timeout()},1000);
  }
  
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onload="timeout()">
	 <script type="text/javascript"> 
  var timeLeft=1800;
  </script>
	<nav style="background-color:#173e43;" class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a style="color:#fae596;" class="navbar-brand" href="#">Online Quiz</a>
		</div>
	  </div>
	</nav>
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<div id="time"  style="font-size:20px;color:red;float:right;">timeout</div>
		<form action="ans_medium.php" id="form1" method="post">	
				<?php 
				$temp=$_SESSION['id'];
				if($temp<=5)
				{
					foreach($que->que as $ques)
				{
				?>
				<table class="table">
				<thead>
				  <tr class="danger">
					<th><?php echo $ques['que'] ?></th>
				  </tr>
				</thead>
				<tbody>
				
					<tr>
					<td><input type="radio" name="radio" value="<?php echo $ques['opt1'] ?>"><?php echo $ques['opt1'] ?></td>
					</tr>
					<td><input type="radio" name="radio" value="<?php echo $ques['opt2'] ?>"><?php echo $ques['opt2'] ?></td>
					</tr>
					<td><input type="radio" name="radio" value="<?php echo $ques['opt3'] ?>"><?php echo $ques['opt3'] ?></td>
					</tr>
					<td><input type="radio" name="radio" value="<?php echo $ques['opt4'] ?>"><?php echo $ques['opt4'] ?></td>
					</tr>
					<td><input type="radio" checked="checked" name="radio" style="display:none;"  value="0"></td>
					</tr>
			 
				</tbody>
				</table>
				<button type="submit" class="btn btn-default">Next</button>
				<?php
						$_SESSION['id'] =$ques['id'];
						if(isset($_POST['submit'])) {
						$a=$_POST['radio'];
				}}}
				else
				{
					
					header("Location: http://localhost/w_quiz/result_med.php");
				}
				?>
		</form>
			</div>	
			<div class="col-sm-2"></div>
		</div>
	<footer  class="page-footer" style="margin-top:285px">
		<div >
			<center><p>- shalini joshi -</p></center>
		</div>
	</footer>

</body>
</html>
