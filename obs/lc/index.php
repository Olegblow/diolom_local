<?php
include '../php/db.php';
?>
<?php  
include('header.php')

?>


<section>
<section class="dei1">
	У вас новое задание:
	<p>бете волков</p>

	</section>

	<?php
include 'bloc_news.php'; 
include 'bloc_members.php';

	 ?>


	

<aside class="linfo">
<table>
	<tr>
		<td>
				<img src="../media/icon/user.png" class="userimg">

		</td>

		<td>
			<?php 
	echo 'Имя: 	'.$_SESSION['user'].'</br>';
	echo 'Должность: '.$_SESSION['user'].'</br>';
	echo 'Права: '.$_SESSION['user'].'</br>';

	?>

		</td>


	</tr>
		
	

</table>

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
<script type="text/javascript" src="../js/ajax/ajax_add_news.js"></script>
<script type="text/javascript" src="../js/ajax/ajax_add_mem.js"></script>


</body>

</html>