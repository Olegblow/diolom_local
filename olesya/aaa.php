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

<section id="ras">

	<aside id="rasa">
	
	<h2>Расчет стоимости натяжного потолка</h2>



	<form id="">
	
  		<input type="button" value="Рассчитать" id="ajax">
  		

  		<span id="summa" class="" >0 рублей</span>
  		 

  		</form>
	
	</aside>

</section>



<script src="js/ajax_test.js"> </script>

<script src="js/modal.js"> </script>



</body>
</html>




<script src="jquery-2.2.3.js"></script>