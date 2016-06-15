<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang=ru>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>REGESTRATION</title>
	
	<link rel="stylesheet" type="text/css" href="css/css_index.css">
	
	<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<?php  
include('../header.php');

?>


<section class="s1">
	
	<aside id="addpost" >
	
		<form method="post" action="regs.php" id="regf">
		
		<input name="login" placeholder="Login"></br>
		<input name="name" placeholder="Name" autofocus required pattern="[a-zA-Z0-9]+"></br>
		<input name="lastname" placeholder="Last Name" autofocus required pattern="[a-zA-Z0-9]+"></br>
		<input type="email" name="email"  placeholder="Email" ></br>
		<input type="password" name="pass" placeholder="Password" ></br>
		<input type="submit" value="regestration"></br>
		</form>
	
	</aside>
	
	
	
</section>






</body>
</html>