<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->




 

		<td valign="top"><table width="800" align="center" border="1">
		<div >
		 <caption>Количество двоек		 </caption>
					<tr>
					  <td colspan="3" bgcolor="#CCCCFF">
					<? echo "По району";
					
				if (isset($_GET['jz']))  {$jz = $_GET['jz'];   		if ($jz == '') 	{unset($jz);}}
				if (isset($_GET['predmet']))  {$predmet = $_GET['predmet'];   		if ($predmet == '') 	{unset($predmet);}}
				if (isset($_GET['chetvert']))  {$chetvert = $_GET['chetvert'];   		if ($chetvert == '') 	{unset($chetvert);}}

						$i=1;
						// echo $chetvert;
						// echo $predmet;
						echo "<table border=1>";
						
						
						
						echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong>школа</strong>"."</td><td>"."<strong>класс</strong>"."</td><td>"."<strong>литер</strong>"."</td><td>"."<strong>промежуток</strong>"."</td><td>"."<strong>кол-во двоек</strong>"."</td><td>"."<strong>предмет</strong>"."</td><td>"."<strong>ФИО  учителя</strong>"."</td></tr>";

						$result = mysql_query("SELECT * FROM monitor2012 WHERE dva>'0' and raion='$raion'    "); //  
										
						
						// Так как запрос возвращает несколько строк, применяем цикл AND chetvert='4 четверть' AND chetvert='годовая' 
						while($myrow = mysql_fetch_array($result))
						{  
							$resteach = mysql_query("SELECT * FROM AA WHERE idn='$myrow[teacher]' ");	//				
							$myrowtech = mysql_fetch_array($resteach);
							$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	$IM=substr( $IM, 0, 1 ); $OTC=substr( $OTC, 0, 1 ); 
							$teacher=$FAM." ".$IM." ".$OTC." ";
						
						
						
						echo    "<tr><td>", $i, "</td><td>", $myrow[scool], "</td><td>", $myrow[klass], "</td><td>", $myrow[liter], "</td><td>", $myrow[chetvert], "</td><td>", $myrow[dva], "</td><td>", $myrow[predmet],  "</td><td>", $teacher, "</td></tr>"; $i=$i+1; }
						echo '</table>';
						echo "Найдено ".mysql_num_rows($result)." записей";
					
							
			  ?>
				
					</td> 
</table>
 
 
 
 
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
