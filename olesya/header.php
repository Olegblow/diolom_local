<header class="header1" >

<p id="th">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </p><p id="th">ООО Перспектива</p>


<nav class="h_nav_f">

	<a id="comp" href="index.php#" title="rez">О КОМПАНИИ </a>&nbsp&nbsp&nbsp&nbsp
	<a id="" href="job.php" title="rez">НАШИ РАБОТЫ </a>&nbsp&nbsp&nbsp
	<a href="zakaz.php" title="rez">РАСЧЕТ </a>&nbsp&nbsp&nbsp&nbsp
	<a href="otziv.php" title="otzivi"> ОТЗЫВЫ </a>&nbsp&nbsp&nbsp
	<a id="go" href="#" title="rez">ВХОД  </a>&nbsp&nbsp&nbsp

	
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
<script src="js/ajaxlog.js"> </script>
<script src="js/ajax_aut.js"> </script>

