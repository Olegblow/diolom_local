<?php
include 'php/db.php';
?>


<?php  
include('header.php')

?>


<section  class="b_file">
		<h2>Документы</h2>



		<table>
<?php  

	$query = "SELECT * FROM file  ";

	if ($result = $mysqli->query($query)) {

		$row = $result->fetch_all(MYSQLI_ASSOC);
    	 

    	foreach ($row as $val):{
    		


    		echo '<tr>';
			echo 	'<td>';
			echo 		'<img src="media/icon/doc_icon.png" width="50" height="45">';
			echo 	'</td>';
			echo 		'<td>';
			echo 		'<a href="media/file/'.$val['Name_file'].'" target="_blank">'.$val ['Title'].'</a>';
			echo		'</td>';
			echo 		'<td>';
			echo 		'	<time>'.$val['Date'].'</time>';
			echo		'</td>';



			echo '</tr>';
    		
    		   		
    	} endforeach;
	}	
	$result->close();
	
	?>

		</table>

</section>


<?php
include 'footer.php'; 
?>


</body>

</html>