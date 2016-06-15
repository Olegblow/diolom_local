<?php
include 'db.php';

if(isset($_POST['text'] ))
{
	$login  =$_SESSION['user'];
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
		
			$query = "INSERT INTO post (idotp,text,date)  VALUES('$login','$texto','$datep')";
			if($result = $mysqli->query($query))
				{
					echo "roflan";

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