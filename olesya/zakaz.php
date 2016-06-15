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
	<table>
		<tr>
			<td>
				Фактура

			</td>
			<td colspan="2">

				<SELECT id="tipp">
						<OPTION VALUE="">Выберите тип потолка</option>
						<option value="1">Матовый белый</option>
						<option value="2">Матовый цветной</option>
					    <option value="3">Сатиновый белый</option>
						<option value="4">Сатиновый цветной</option>
						<option value="5">Лаковый белый</option>
						<option value="6">Лаковый цветной</option>
						<option value="7">Полупрозрачный</option>
				</SELECT>


				
			</td>



		</tr>

		<tr>
			<td>
				Площадь (m<sup>2</sup>)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}"  id="pl">
			</td>


		</tr>

		<tr>
			<td>
				Углы (шт)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}"  id="ug">
			</td>


		</tr>

		<tr>
			<td>
				Обход трубы (шт)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}" id="ob">
			</td>


		</tr>

		<tr>
			<td>
				Декоративная лента (м.п.)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}" id="de">
			</td>


		</tr>

		<tr>
			<td>
				Количество люстр (шт)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}" id="lus">
			</td>


		</tr>

		<tr>
			<td>
				Количество светильников(шт)

			</td>
			<td>
				<input type="text" pattern="[0-9]{0,3}" id="svet">
			</td>


		</tr>

		<tr>
		<td>
  		<input type="button" value="Рассчитать" id="ras"    >
  		</td><td>

  		 <span id="summa" class="" >0 рублей</span>
  		 </td>
  		 </tr>
  		 </table>

  		</form>
	
	</aside>

</section>



<script src="js/racet.js"> </script>





	



<script src="js/modal.js"> </script>



</body>
</html>




<script src="jquery-2.2.3.js"></script>