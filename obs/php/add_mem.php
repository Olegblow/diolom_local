<?php
include 'db.php';


	$login  =$_SESSION['user'];
	$fio 	=$_POST['fio'];
	$mpost 	=$_POST['mpost'];
	$minfo 	=$_POST['minfo'];

	//$datep=date("Y-m-d H:i:s");
	
//}
		
	if($login=="")
	{
		echo "zzzaa";
	}
	else
		{
		
			$query = "INSERT INTO mp (FIO,POST,INFO)  VALUES('$fio','$mpost','$minfo')";
			if($result = $mysqli->query($query))
				{
					echo "roflan";	


	}
			else{
				echo"pomoyka";
			
			}
		
}

?>