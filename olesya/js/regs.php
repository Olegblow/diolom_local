<?php
include 'db.php';

if(isset($_POST['login'] ))
{
	$login  =$_POST['login'];
	$name 	=$_POST['name'];
	$phon 	=$_POST['phon'];
	$em     =$_POST['email'];
	$pwd  	=$_POST['pass'];
}
	
	//$login  =sanString($_POST['login']);
	//$pwd    =sanString($_POST['pass']);	
	//$lname 	=sanString($_POST['phon']);
	//$em		=sanString($_POST['email']);
	//$name  	=sanString($_POST['name']);
	
	
	if($login==""||$pwd==""||$name==""||$lname=""||$em==""||$phon="")
	{
		echo "zzzaa";
	}
	else
		{
		
			$query = "INSERT INTO user (login,pwd,name,email,phon)  VALUES('$login','$pwd','$name','$em','$phon')";
			if($result = $mysqli->query($query))
				{
					echo "roflan </br> ";

		//$result = mysqli_query("SELECT login FROM user WHERE login='$login'");
		//}
			//if(mysqli_num_rows($result)==0)
			//{
				//$qwery=mysql_query("INSERT INTO user (login,name,lastname,em,pass)  VALUES('$login','$name','$lastname','$em','$pwd')");
			
			//



	}
			else{
				echo"need other login";
			
			}
		
}

?>