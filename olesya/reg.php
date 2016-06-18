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
<script src="jquery-2.2.3.js"></script>

</head>

<body>

<?php  
include('header.php');
?>
	
<section id="ras">

	<aside id="rasa">

		
		<form method="post" action="aut/regs.php" >	
		<h2> Регистация</h2>
		<table>

		<tr> 

			<td>
				Введите login
			</td>
			<td>
				<input name="login" placeholder="Login" id="login">
			</td>
		</tr>

		<tr> 

			<td>
				Введите Имя
			</td>
			<td>
				<input name="name" id="fname" placeholder="Name" autofocus required pattern="[a-zA-Z0-9]+">	
			</td>
		</tr>

		<tr> 

			<td>
				Введите e-mail
			</td>
			<td>
			<input type="email" id="email" name="email"  placeholder="Email" ></br>
			</td>
		</tr>	

		<tr> 

			<td>
				Введите номер телефона
			<td>
			<input type="phon" name="phon" placeholder="phone" id="phone" >
			</td>
		</tr>


		<tr> 

			<td>
				Введите пароль
			</td>
			<td>
			<input type="password" name="pass" placeholder="Password" id="pwd"> </input>
			</td>
		</tr>



		<tr> 

			<td>
			</td>
			<td>
				<input type="submit" value="Зарегистрироваться" id="ajax_reg">
			</td>
		</tr>

		</table>

		</form>


	
	</aside>


	<script src="js/modal.js"> </script>

	
</section>

</body>
</html>