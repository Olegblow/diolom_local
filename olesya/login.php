	<?php
include 'db.php';



if(isset($_POST['login'] ['pass'] ))
{
	$login  =$_POST['login'];
	$pwd  	=$_POST['pass'];
	//$login  =sanString($_POST['login']);
	//$pwd    =sanString($_POST['pass']);	
	
	
	if($login==""|| $pwd=="")
	{
		echo "oshibka";
	}
	else
		{
		//echo $login;
		
		$query = "SELECT login,pwd FROM user WHERE login='$login' AND pwd='$pwd'";
		//$result = mysql_query();
		}
			if($result = $mysqli->query($query)!=0)
			{
				echo "roflan </br> ";
				$_SESSION['user']=$login;
				$_SESSION['pass']=$pwd;
			
			}

			else{
				echo "pomoika </br> ";

			
			}
		
}



?>

