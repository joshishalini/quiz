<?php
include("class/users.php");
$answer=new users;
$id=$_SESSION['id'];

$ans= $_POST['radio'];
//echo $ans;
if($ans=="0")
{
	for($i=$id;$i<=5;$i++)
	{
		$query="insert into answer values('$i','0')";
		if($answer->noans($query))
		{
		
		}
	}
	header("Location: http://localhost/w_quiz/result_hard.php");
}
else{
$query="insert into answer values('$id','$ans')";
if($answer->ans($query))
{
	$id++;
	$_SESSION['id'] =$id;
	$answer->url("hard.php?run=success");
}
}
?>