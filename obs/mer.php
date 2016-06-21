<?php
include 'php/db.php';
$mpid=(string)$_GET['id'];

?>

<?php  
include('header.php')

?>


<section>
	<section class="b_cp">

	<H2>Мероприятия</H2>

	<?php  

	if(empty($mpid)) {

	$query = "SELECT * FROM mer";

	if ($result = $mysqli->query($query)) {

		
    	$row = $result->fetch_all(MYSQLI_ASSOC);

    	foreach ($row as $val):{

    		echo '<a id="hcp" href="mer.php?id='.$val['ID'].'"> <h2 >'.$val['TITLE'].'</h2> </a>';
    		echo $val['INFO'];

    		
    		   		
    	} endforeach;
	}


	$result->close();
	}else{



$query = "SELECT * FROM mer WHERE ID='$mpid'";

	if ($result = $mysqli->query($query)) {

    	$row = $result->fetch_row();

    		echo '<h2>'.$row[1].'</h2>';
    		echo '<p id="sht">'.$row[2].'</p>';
   		
    		    		
    		echo $row[3].'</p>';

    		echo '</br></br></br><a href="mep.php" id="lmp"> другие Мероприятия</a>';
    	


    	
    	

	}
}


	?>





	</section>

</section>



<?php
include 'footer.php'; 
?>


</body>

</html>