<?php

session_start();
class users{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="w_quiz";
	public $conn;
	public $i;
	public $data;
	public $que;

	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die("database connection Failed!!".$this->conn->connect_errno);
			
		}
	}
	public function signup($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function signin($email,$pass)
	{
		$query=$this->conn->query("select email,pass from signup where email='$email' and pass='$pass'");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}		

	}
	public function que_show($y)
	{
		
		$query=$this->conn->query("select * from easy where id='$y'");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->que[]=$row;			
		}
		return $this->que;	
		
	}
	public function que_show_medium($y)
	{
		
		$query=$this->conn->query("select * from medium where id='$y'");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->que[]=$row;			
		}
		return $this->que;	
		
	}
	public function que_show_hard($y)
	{
		
		$query=$this->conn->query("select * from hard where id='$y'");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->que[]=$row;			
		}
		return $this->que;	
		
	}
	
	public function ans($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function noans($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function result_ans()
	{
		
		$right=0;
		
		$query=$this->conn->query("select easy.id,answer.id from easy,answer where easy.ans=answer.ans");
		
		while($ques=$query->fetch_array(MYSQLI_ASSOC))
		{
			$right++;
		}
	return $right;

	
	}
	public function result_ans_med()
	{
		
		$right=0;
		
		$query=$this->conn->query("select medium.id,answer.id from medium,answer where medium.ans=answer.ans");
		
		while($ques=$query->fetch_array(MYSQLI_ASSOC))
		{
			$right++;
		}
	return $right;

	
	}
	public function result_ans_hard()
	{
		
		$right=0;
		
		$query=$this->conn->query("select hard.id,answer.id from hard,answer where hard.ans=answer.ans");
		
		while($ques=$query->fetch_array(MYSQLI_ASSOC))
		{
			$right++;
		}
	return $right;

	
	}
	public function url($url)
	{
		header("location:".$url);
	}
	
}

?>