<?php
include 'php/db.php';
?>


	<?php  
	include('header.php')

	?>


<section>
	<aside class="b_news">

	<?php  

	

	$query = "SELECT * FROM news ORDER BY ID DESC LIMIT 0,3 ";

	if ($result = $mysqli->query($query)) {

		echo "	<h2>Новости</h2>";	
    	$row = $result->fetch_all(MYSQLI_ASSOC);
    	

    	foreach ($row as $val):{
    		

    		echo ' <p> <img  class="leftimg"   width="100px"  height="120px" src="media/tnews/'.$val['ID'].'.jpg"  >' ;
    		echo '<time>'.$val['DATE'].'</time>';

    		echo '<a id="hcp" href="news.php?id='.$val['ID'].'"> <h2 >'.$val['TITLE'].'</h2> </a>';
    		echo $val['POST'].'</p>';
    		

    		echo '</br>';
    		echo '</br>';




    		   		
    	} endforeach;
	}
	echo '</ul>';


	$result->close();
	?>

	</aside>






	<aside class="b_memb">

	<h3>ЧЛЕНЫ СОВЕТА</h3>

	<p>
	<table>
	<?php  

	for ($i=1; $i < 6 ; $i++) { 
		echo "<td>";
		echo'<a id="phmp" href="#" ><img src="media/mp/1.png" width="120px"  height="120px" alt="Белоглазов А.С."></a>';
		echo "</td>";
	}

	?>
	
	</table>
	
	</p>
	<a href="mp.php" id="lmp"> другие члены палаты</a>

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








</section>

<?php
include 'footer.php'; 
?>



</body>

</html>