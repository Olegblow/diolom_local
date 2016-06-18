<!DOCTYPE html>
<html lang=ru>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>HOME PAGE</title>
	
	<link rel="stylesheet" type="text/css" href="css/css_index.css">
	
	<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/jquery-2.2.3.js"></script>
<script type="text/javascript" src="js/modal.js"></script>


</head>
<body>

<header class="header1" >
<p><img src="media/logo/h_logo.png" class="imgh"  ></p>
<nav id="h_nav">
<?php

if ($lg){
	echo $_SESSION['user'];
	echo "||";
	echo ' 	<a href="#" title="rez" id="logout">Выйти&nbsp&nbsp&nbsp </a> ';
}
else{

	echo '<a href="#" title="rez" id="go">Войти </a>';
	echo '||';
	echo '<a href="#" title="rez">Зарегестрируйтесь&nbsp&nbsp&nbsp</a>';
}

	?>
	
</nav>

<nav class="h_nav_f">

	<a href="index.php" title="rez">Главная </a>&nbsp&nbsp&nbsp&nbsp
	<a href="#" title="rez">О Палате </a>&nbsp&nbsp&nbsp&nbsp
	<a href="mp.php" title="rez">Члены палаты </a>&nbsp&nbsp&nbsp&nbsp
	<a href="news.php" title="rez">Новости </a>&nbsp&nbsp&nbsp&nbsp
	<a href="file.php" title="rez">Документы</a>&nbsp&nbsp&nbsp&nbsp	
	<a href="#" title="rez">Мероприятия</a>&nbsp

</nav>
</header>







<aside id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      
<?php 

if ($lg){
	echo $_SESSION['user'];
	echo '  <a href="#" title="logout" id="logout"> Выйти</a> ';
}
else{
	
	echo <<< _END
		
		<form method="post" action="login.php">
			<p>Логин:</p>	
			<input name="login" placeholder="Login" id="login">
			<p >Пароль:</p>
			
			<input type="password" name="pass" placeholder="Password" id="pwd">
			<div id="lower">
				<input type="button" value="Войти" id="ajax_aut">
				
				<a href="reg.php">Или зарегестрируйтесь</a>


			</div>
</form>


_END;
		}

?>

</aside>
<aside id="overlay"></aside><!-- Пoдлoжкa -->

<script src="js/ajax/ajax_aut.js"> </script>
<script src="js/ajax/ajax_logout.js"> </script>

