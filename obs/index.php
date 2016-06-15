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

</head>

<?php  
include('header.php')

?>


<section>
	<aside class="b_news">

	<a href="#"><h2>Диплом администрации города Хабаровска</h2></a>
	<p>
	27 мая 2016 года состоялось заседание двадцати двух членов Общественной палаты Хабаровского края III состава по процедуре конкурсного отбора одиннадцати членов палаты, предложенных местными общественными организациями.
	</p>
		<a href="#" id="lmp"> Другие новости</a>


	<time>
	27-05-2016
	</time>

	</aside>






	<aside class="b_memb">

	<h3>ЧЛЕНЫ СОВЕТА</h3>

	<p>
	<table>
	<?php  

	for ($i=1; $i < 7 ; $i++) { 
		echo "<td>";
		echo'<a id="phmp" href="#" ><img src="media/mp/1.jpg" width="100px"  height="120px" alt="Белоглазов А.С."></a>';
		echo "</td>";
	}

	?>
	
	</table>
	
	</p>
	<a href="mp.php" id="lmp"> другие члены палаты</a>

	</aside>




<aside class="b_news">

	<a href="#"><h2>Диплом администрации города Хабаровска</h2></a>
	<p>
	27 мая 2016 года состоялось заседание двадцати двух членов Общественной палаты Хабаровского края III состава по процедуре конкурсного отбора одиннадцати членов палаты, предложенных местными общественными организациями.
	</p>
		<a href="#" id="lmp"> Другие новости</a>


	<time>
	27-05-2016
	</time>

	</aside>

<aside class="b_memb">

	<h3>Анонсы мероприятий	</h3>

	<ul>
		
		<li>
			первый анонс будет ссылочка тип дыааа
		</li>
		<li>
			второй анонс
		</li>
		<li>
			второй анонс
		</li>
		<li>
			второй анонс
		</li>

	</ul>

	<time>
	
	</time>

	</aside>

<aside class="b_news">

	<a href="#	"><h2>Диплом администрации города Хабаровска</h2></a>

	<p>
	27 мая 2016 года состоялось заседание двадцати двух членов Общественной палаты Хабаровского края III состава по процедуре конкурсного отбора одиннадцати членов палаты, предложенных местными общественными организациями.
	</p>
		<a href="#" id="lmp"> Другие новости</a>


	<time>
	27-05-2016
	</time>

	</aside>







</section>





</body>

</html>