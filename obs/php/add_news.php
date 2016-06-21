<?php
include 'db.php';

if(isset($_POST['text'] ))
{
	$login  =$_SESSION['user'];
	$title 	=$_POST['title'];
	$texto 	=$_POST['text'];
	$datep=date("Y-m-d H:i:s");
	
}
	
	//$login  =sanString($_POST['login']);
	//$pwd    =sanString($_POST['pass']);	
	//$lname 	=sanString($_POST['phon']);
	//$em		=sanString($_POST['email']);
	//$name  	=sanString($_POST['name']);
	
	
	if($login=="")
	{
		echo "zzzaa";
	}
	else
		{
		
			$query = "INSERT INTO news (DATE,TITLE,TNEWS)  VALUES('$datep','$title','$texto')";
			if($result = $mysqli->query($query))
				{
					echo "roflan".$title;

		//$result = mysqli_query("SELECT login FROM user WHERE login='$login'");
		//}
			//if(mysqli_num_rows($result)==0)
			//{
				//$qwery=mysql_query("INSERT INTO user (login,name,lastname,em,pass)  VALUES('$login','$name','$lastname','$em','$pwd')");
			
			//



	}
			else{
				echo"pomoyka";
			
			}
		
}

?>