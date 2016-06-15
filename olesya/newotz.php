<?php
include 'db.php';
?>


	

<?php

$query = "SELECT * FROM post ORDER BY id DESC LIMIT 0,1 ";

	if ($result = $mysqli->query($query)) {	
		

    	$row = $result->fetch_all(MYSQLI_ASSOC);

    	echo '<ul id="">'; 

    	foreach ($row as $val):{
    		//echo ' <li>';

    		echo '<section id="otzbloc">';

    		
    		echo '<H2> от кого: '.$val['idotp'].'</H2>';
    		echo '<p>' .$val['text']. '</p>';
    		echo 'Дата: <time>'.$val['date'].'</time>'; 	

    		echo '</section>';
    		   		
    	} endforeach;
	}
	echo '</ul>';


	$result->close();


?>







	
	
	
</section>




<script src="js/modal.js"> </script>
<script src="js/ajax_test.js"> </script>


<script src="jquery-2.2.3.js"></script>
</body>
</html>




