<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>HOME PAGE</title>
	
	<link rel="stylesheet" type="text/css" href="css/css_index.css">
	
	<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="jquery-2.2.3.js"></script>

</head>

<body>

<?php  
include('header.php')

?>

<section id="results">

	

<?php

$query = "SELECT * FROM post LIMIT 0,4";

	if ($result = $mysqli->query($query)) {
		
		echo "	&nbsp&nbsp&nbsp";	
		 


    	$row = $result->fetch_all(MYSQLI_ASSOC);

    	//echo '<ul id="">'; 

    	foreach ($row as $val):{
    		//echo ' <li>';

    		echo '<section id="otzbloc">';

    		
    		echo '<H2> от кого: '.$val['idotp'].'</H2>';
    		echo '<p>' .$val['text']. '</p>';
    		echo 'Дата: <time>'.$val['date'].'</time>';

    		

    		echo '</section>';
    		



    		   		
    	} endforeach;
	}
	//echo '</ul>';


	$result->close();


?>







	
	
	
</section>


<?
	if($lg){
		
			echo <<< _END
	<aside id="addpost">
		<h4>Пожалуйста оставьте нам ваш отзыв:</h4>
		<form   action="addp.php" method="post" >
		
		<p><textarea name="text" id="text1" ></textarea></p>		
		<input type="button" value="Отправить" id="ajax">
		</form>
	
	</aside>
_END;
	
	}
	?>


<script src="js/modal.js"> </script>
<script src="js/ajax_test.js"> </script>


<script src="jquery-2.2.3.js"></script>
</body>
</html>




