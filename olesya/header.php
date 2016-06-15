<header class="header1" >

<p id="th">Мы находимся по адресу:</p><p id="th"> Россия, 680021,г. Хабаровск, ул. Некрасова, 44</p>


<nav class="h_nav_f">

	<a id="comp" href="index.php#" title="rez">О КОМПАНИИ </a>&nbsp&nbsp&nbsp&nbsp
	<a id="" href="job.php" title="rez">НАШИ РАБОТЫ </a>&nbsp&nbsp&nbsp
	<a href="zakaz.php" title="rez">РАСЧЕТ </a>&nbsp&nbsp&nbsp&nbsp
	<a href="otziv.php" title="otzivi"> ОТЗЫВЫ </a>&nbsp&nbsp&nbsp
	<a id="go" href="#" title="rez">РЕГИСТРАЦИЯ </a>&nbsp&nbsp&nbsp

	
</nav>
</header>

<aside id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      




<?php 

if ($lg){
	echo $_SESSION['user'];
	echo '  <a href="aut/logout.php" title="logout">▲logout</a> ';
}
else{
	
	echo <<< _END
		
		<form method="post" action="login.php">
			<p>Логин:</p>
			<input name="login" placeholder="Login">
			<p >Пароль:</p>
			
			<input type="password" name="pass" placeholder="Password" >
			<div id="lower">
				<input type="submit" value="Войти">
				<a href="reg.php">Или зарегестрируйтесь</a>


			</div>
</form>

_END;
		}

?>









</aside>
<aside id="overlay"></aside><!-- Пoдлoжкa -->