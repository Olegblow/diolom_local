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



<section >
	<aside id="inf">

	
	<ul>

		<li>
			История нашей компании насчитывает сотни сделанных потолков
			и сотни отзывов благодарности.
		</li>
		<li>
			Наша компания находиться по адресу: город Хабаровск улица Некрасова 44
		</li>
		<li>
			Телефон: 41-02-30, 70-30-40
		</li>

	</ul>
	
	






	</aside>

	<aside id="ti">
	<img src="media/3.jpg" width="99%">
	<H2 >О Нас:</H2>	
	<p>
Нам доверяют тысячи клиентов, сотни дилеров и официальные производители потолочных систем.</p><p>
Зарегистрированный товарный знак, популярность которого, подтверждается постоянными попытками использовать наш бренд и репутацию многочисленными плагиаторами.</p><p>
Подлинные полотна натяжных потолков и высококачественные комплектующие от ведущих мировых производителей с многолетней гарантией.
Уникальная система менеджмента – персональный менеджер лично ведет объект, от первой встречи с клиентом, до полного завершения работ.</p><p>
Только русские профессиональные монтажники, прошедшие конкурсный отбор. Средний опыт специалистов нашей компании по монтажу натяжных потолков – более 5 лет.</p><p>
Уникальная база накопленного опыта реализации сложных проектов.</p><p>
Использование европейских сертифицированных технологий. Только гарпунная система крепления в алюминиевый багет для ПВХ потолков. Исключительно европейский метод крепления тканевых полотен. Никаких кустарно-штапиковых «технологий».</p><p>
Высококачественное гарантийное обслуживание и отлаженная работа отдела по контролю качества выполненных работ позволяет оперативно реагировать на просьбы и замечания клиентов.</p>

	</aside>
	<aside id="tiot">
	<H2> Отзывы о нас: </H2>
	</aside>


<?php

$query = "SELECT * FROM post LIMIT 0,2";

	if ($result = $mysqli->query($query)) {
		
		
    	$row = $result->fetch_all(MYSQLI_ASSOC);

    	//echo '<ul id="">'; 

    	foreach ($row as $val):{
    		//echo ' <li>';

    		echo '<section id="tiot">';
   			echo '<H2> от кого: '.$val['idotp'].'</H2>';
    		echo '<p>' .$val['text']. '</p>';
    		echo 'Дата: <time>'.$val['date'].'</time>';
   			echo '</section>';
    		    		   		
    	} endforeach;
	}
	//echo '</ul>';


	$result->close();


?>

<aside id="tiot">
	<H2> Вызвать на бесплатный замер?</H2>
	<form>
		<input type="button" value="Бесплатный замер" id="zamer"> 
	</form>
	<h2> Или просто позвоните для уточнения информации </h2>
	<p>Телефон: 410-230, 70-30-40 </p>
	</aside>



</section>


<footer>
	ооо Перспектива
</footer>

	
	






<script>
var state = false;


$('#comp').click(function(){

	if(state==false) {
  $('#inf').slideDown('fast', function() {
   }); 
  state = true;
} else {

	  $('#inf').slideUp('fast', function() {
	}); 
	  state= false;
}

});



</script>




<script src="js/zamer.js"> </script>


<script src="js/modal.js"> </script>



</body>
</html>




<script src="jquery-2.2.3.js"></script>