<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		

		
		
		
		
		
		
		
<table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
<title>Мониториг ввода</title>


  <tr>
    <td><table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
      <tr>

        <td valign="top">
		

	 
<?

echo "<br><br><p align='center'>Начальные школы</p><br>";
echo "<p align='center'>(проверка ввода мониторинга)</p><br><br>";
echo "<table border=1 align=center>";
echo "<tr><td>".'№'."</td><td>".'Название школы'."</td><td>".'тип'."</td><td>".'I чет'."</td><td>".'II чет'."</td><td>".'III чет'."</td><td>".'IV чет'."</td><td>".'год'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='начальная' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// число всех предметов от типа школы 
		if ($vd==средняя)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='СШ';  }  
		if ($vd==основная)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='ОШ';}
		if ($vd==начальная) {$pro="10"; $color_tab ='#00FF7F';  $vd1='НШ';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ПГК' ")); // Считаем
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($cnt); // Считаем	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($reszap); // Считаем
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='годовая' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' экзаменационная' ")); // Считаем
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ЕНТ' ")); // Считаем
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ИТОГОВАЯ' ")); // Считаем
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		


<?

echo "<br><br><p align='center'>Основные школы</p><br>";

echo "<table border=1 align=center>";
echo "<tr><td>".'№'."</td><td>".'Название школы'."</td><td>".'тип'."</td><td>".'I чет'."</td><td>".'II чет'."</td><td>".'III чет'."</td><td>".'IV чет'."</td><td>".'год'."</td><td>".'Экз'."</td><td>".'Итог'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='основная' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// число всех предметов от типа школы 
		if ($vd==средняя)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='СШ';  }  
		if ($vd==основная)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='ОШ';}
		if ($vd==начальная) {$pro="10"; $color_tab ='#00FF7F';  $vd1='НШ';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ПГК' ")); // Считаем
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($cnt); // Считаем	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($reszap); // Считаем
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='годовая' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' экзаменационная' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ЕНТ' ")); // Считаем
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ИТОГОВАЯ' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		


<?

echo "<br><br><p align='center'>Средние школы</p><br>";

echo "<table border=1 align=center>";
echo "<tr><td>".'№'."</td><td>".'Название школы'."</td><td>".'тип'."</td><td>".'I чет'."</td><td>".'II чет'."</td><td>".'III чет'."</td><td>".'IV чет'."</td><td>".'год'."</td><td>".'Экз'."</td><td>".'ЕНТ'."</td><td>".'Итог'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='средняя' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// число всех предметов от типа школы 
		if ($vd==средняя)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='СШ';  }  
		if ($vd==основная)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='ОШ';}
		if ($vd==начальная) {$pro="10"; $color_tab ='#00FF7F';  $vd1='НШ';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_четверть' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ПГК' ")); // Считаем
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($cnt); // Считаем	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_четверть' "); 
		$cnt = mysql_fetch_row($reszap); // Считаем
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='годовая' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' экзаменационная' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ЕНТ' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='ИТОГОВАЯ' ")); // Считаем
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
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
