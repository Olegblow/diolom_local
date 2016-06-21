<?php
include 'php/db.php';
$mpid=(string)$_GET['id'];
?>

<?php  
include('header.php')

?>


<section>


  
	<aside class="b_cp">

	<?php  

	if(empty($mpid)) {

	$query = "SELECT * FROM mp";

	if ($result = $mysqli->query($query)) {

		echo "	<h2>Члены совета</h2>";	
    	$row = $result->fetch_all(MYSQLI_ASSOC);
    	echo '<ul id="uisp">'; 

    	foreach ($row as $val):{
    		echo ' <li>';

    		echo ' <p> <img  class="leftimg"   width="100px"  height="120px" src="media/mp/1.png"  >' ;
    		echo '<a id="hcp" href="mp.php?id='.$val['ID'].'"> <h2 >'.$val['FIO'].'</h2> </a>';
    		echo $val['POST'].'</p>';
    		

    		echo '</li>';
    		echo '</br>';
    		echo '</br>';



    		   		
    	} endforeach;
	}
	echo '</ul>';


	$result->close();
	}else{



$query = "SELECT * FROM mp WHERE ID='$mpid'";

	if ($result = $mysqli->query($query)) {

    	$row = $result->fetch_row();

    		echo '<h2>'.$row[1].'</h2>';
    		echo '<p id="sht">'.$row[2].'</p>';

    		echo ' <p id="sht"> <img  class="leftimg"   width="180px"  height="225px" src="media/mp/1.png"  >' ;
    		
    		
    		echo $row[3].'</p>';

    		echo '</br></br></br><a href="mp.php" id="lmp"> другие члены палаты</a>';
    	


    	
    	

	}
}


	?>
 

	</aside>
</section>


<?php
include 'footer.php'; 
?>



</body>

</html>