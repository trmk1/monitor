<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		
		
		
		
<table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
<title>Мониториг ввода</title>


  <tr>
    <td><table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
      <tr>

        <td valign="top">
		

	 
<?

echo "<br><br><p align='center'>Количество внесенных в базу предметов</p><br><br>";
echo "<table border=1>";
echo "<tr><td>".'№'."</td><td>".'Название школы'."</td><td>".'I чет'."</td><td>".'II чет'."</td><td>".'III чет'."</td><td>".'ВОУД'."</td><td>".'IV чет'."</td><td>".'год'."</td><td>".'Экз'."</td><td>".'ЕНТ'."</td><td>".'Итог'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW'  ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{echo "<tr><td>";
		
			$vd=$myrow["vid"];
				// число всех предметов от типа школы 
				if ($vd==средняя)	$pro="24";   
				if ($vd==основная)	 $pro="20" ; 
				if ($vd==начальная) $pro="10";
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='1_четверть' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='2_четверть' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='3_четверть' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='ПГК' ")); // Считаем
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($cnt); // Считаем		
		
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' ")); // Считаем
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($cnt); // Считаем
		
		echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='годовая' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert=' экзаменационная' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  										 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='ЕНТ' ")); // Считаем
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='ИТОГОВАЯ' ")); // Считаем
		echo  $cnt[0] ; /*round($cnt[0]/8/$pro*100), */  
		}
		
		echo "</td></tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		



		
		
			</td> 
</table>
		
	</table>	
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
