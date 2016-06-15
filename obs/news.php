<?php
include 'db.php';
$nid=(string)$_GET['id'];

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

	if(empty($nid)) {

	$query = "SELECT * FROM news ORDER BY ID DESC LIMIT 0,10 ";

	if ($result = $mysqli->query($query)) {

		echo "	<h2>Новости</h2>";	
    	$row = $result->fetch_all(MYSQLI_ASSOC);
    	echo '<ul id="uisp">'; 

    	foreach ($row as $val):{
    		echo ' <li>';

    		echo ' <p> <img  class="leftimg"   width="100px"  height="120px" src="media/tnews/'.$val['ID'].'.jpg"  >' ;
    		echo '<time>'.$val['DATE'].'</time>';

    		echo '<a id="hcp" href="news.php?id='.$val['ID'].'"> <h2 >'.$val['TITLE'].'</h2> </a>';
    		echo $val['POST'].'</p>';
    		

    		echo '</li>';
    		echo '</br>';
    		echo '</br>';




    		   		
    	} endforeach;
	}
	echo '</ul>';


	$result->close();
	}else{



$query = "SELECT * FROM news WHERE ID='$nid'";

	if ($result = $mysqli->query($query)) {

    	$row = $result->fetch_row();

    		echo '<h2>'.$row[2].'</h2>';
    		echo '<p>'.$row[3].'</p>';
   			echo '<time>'.$row[1].'</time>';
    		

    		echo '</br></br></br><a href="news.php" id="lmp"> другие новости</a>';
    	


    	
    	

	}
}


	?>









	</aside>





</section>

</body>

</html>