<?php
include 'db.php';
$mpid=(string)$_GET['id'];
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

</head>

<?php  
include('header.php')

?>


<section>


  
	<aside class="b_cp">

	<?php  

	if(empty($mpid)) {

	$query = "SELECT * FROM mp";

	if ($result = $mysqli->query($query)) {

		echo "	<h2>Члены палаты</h2>";	
    	$row = $result->fetch_all(MYSQLI_ASSOC);
    	echo '<ul id="uisp">'; 

    	foreach ($row as $val):{
    		echo ' <li>';

    		echo ' <p> <img  class="leftimg"   width="100px"  height="120px" src="media/mp/'.$val['ID'].'.jpg"  >' ;
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

    		echo ' <p id="sht"> <img  class="leftimg"   width="180px"  height="225px" src="media/mp/'.$row[0].'.jpg"  >' ;
    		
    		
    		echo $row[3].'</p>';

    		echo '</br></br></br><a href="mp.php" id="lmp"> другие члены палаты</a>';
    	


    	
    	

	}
}


	?>
 

	</aside>
</section>





</body>

</html>