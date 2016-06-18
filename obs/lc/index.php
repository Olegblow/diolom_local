<?php
include '../php/db.php';
?>
<?php  
include('header.php')

?>


<section>
	<section class="dei">
	<h1>Добавить новость:</h1>
	<textarea class="title" placeholder="Title?..."></textarea>

	<textarea class="suitup" placeholder="что нового?..."></textarea>
	<button class="go">Добавить новость</button>

	</section>


<aside class="linfo">
	<?php 
	echo 'Имя 	'.$_SESSION['user'].'</br>';
	echo $_SESSION['user'].'</br>';
	echo $_SESSION['user'].'</br>';
	echo $_SESSION['user'].'</br>';
	echo $_SESSION['user'].'</br>';
	?>
	<p>
		информация о пользователе
	</p>
</aside>

<aside class="linfo">
	
<p>
	информация
	о  том что надо сделать какие мероприятия будут проведены
</p>

</aside>
<aside class="linfo">
	
<p>
	информация
	о  том что надо сделать какие мероприятия будут проведены
</p>
<p>
	информация
	о  том что надо сделать какие мероприятия будут проведены
</p>
<p>
	информация
	о  том что надо сделать какие мероприятия будут проведены
</p>

</aside>





</section>



<?php
include 'footer.php'; 
?>
<script type="text/javascript" src="../js/red.js"></script>

</body>

</html>